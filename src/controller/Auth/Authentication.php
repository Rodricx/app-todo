<?php
namespace Controller\Auth;

use Helpers\Redirect;
use Classes\DAO;

class Authentication extends DAO
{

    // sanitização dos dados
    public function fieldSanitize(array $fields){

        $data = [];

        foreach($fields as $typefield => $field){
            $data[$typefield] = $field;
        }

        return (object) $data;
    }


    // pesquisa das credenciais
    public function authUser(array $data){
        $data = $this->fieldSanitize($data);
        $result = $this->select('users', "WHERE nome = '$data->name' AND email = '$data->email' AND senha = '$data->pass'");

        if($result !== NULL){
            Redirect::redirect("to-do.php");
        }
    }

}
