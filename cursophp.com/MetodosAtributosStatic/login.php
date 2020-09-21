<?php

class Login{
    public static $user;

    public static function verificaLogin()
    {  
       echo "O ".self::$user." esta online";
      
    }

    public function sairSistema(){
        echo "<br>";
        echo "O Usuario Deslogou";
    }
}
Login::$user = "Administrador";
Login::verificaLogin();
$login = new Login();
$login -> sairSistema();