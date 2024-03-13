<?php 
namespace Controller;

require "../vendor/autoload.php";

use Controller\Auth\Authentication;
use Helpers\DD;

$x = new Authentication();
DD::dd($x->authUser($_POST));   

?>