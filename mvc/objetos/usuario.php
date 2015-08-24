<?php
class usuario{
    private $usuario;
    private $password;
    
    function __construct($usuario, $password){
        $this->usuario=$usuario;
        $this->password=$password;
    }
    
    function setUsuario($usuario){
        $this->usuario=$usuario;
    }
    
    function getUsuario(){
        return $this->usuario;
    }
    
    function setPassword($password){
        $this->password=$password;
    }
    
    function getPassword(){
        return $this->password;
    }
?>