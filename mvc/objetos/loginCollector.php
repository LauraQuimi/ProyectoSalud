<?php
include_once('usuario.php');
include_once('Collector.php');

class loginCollector extends Collector{
    function ingreso($usuario, $password){
        $row = self::$db->getRow("SELECT password from usuario where username = '$username'");  
        $pass = $row{'password'};
        if($pass==$password){
            $valido = 'true';
            return $valido;
        }else{
            $valido = 'false';
            return $valido; 
        }        
    }
}
?>
