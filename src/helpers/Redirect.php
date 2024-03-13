<?php 
namespace Helpers;

class Redirect
{
    public static function redirect($path)
    {
        header("Location: ../views/$path");
    }

}


?>