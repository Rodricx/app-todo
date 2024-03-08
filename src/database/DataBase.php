<?php 
namespace Database;

use Database\Environment\EnvironmentVariable;
use mysqli;

class DataBase extends EnvironmentVariable
{
    protected readonly string $host;
    protected readonly string $user;
    protected readonly string $password;
    protected readonly string $database;
    protected readonly int $port;
    protected $credentials;
    public $conn;

    public function __construct()
    {

        $this->runEnvironment();

        $this->host = "dbMysql";
        $this->user = "root";
        $this->password = "root";
        $this->database = "toDoDatabase";
        $this->port = 3306;
        $this->credentials = (object)['host' => getenv('DB_HOST'), 'user' => getenv('DB_USER'), 'password' => getenv('DB_PASS'), 'database' => getenv('DB_NAME'), 'port' => getenv('DB_PORT')];
        $this->connection();
    }

    protected function connection()
    {
        $this->conn = new mysqli($this->credentials->host, $this->credentials->user, $this->credentials->password, $this->credentials->database);
        $this->conn->set_charset("utf8mb4");

        if(!$this->conn){
            die("Connection failed: " . $this->conn->connect_error);
        }

        return $this->conn;
    }
}
?>