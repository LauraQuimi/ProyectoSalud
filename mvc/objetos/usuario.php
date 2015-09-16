<?php
class usuario{
    private $id_usuario;
    private $tipo_usuario;
    private $tipo_identificacion;
    private $num_identificacion;
    private $nombres;
    private $apellidos;
    private $fecha_nac;
    private $celular;
    private $email;
    private $genero;
    private $user;
    private $password;
    
    function __construct($id_usuario, $tipo_usuario, $tipo_identificacion, $num_identificacion, $nombres, $apellidos, $fecha_nac, $celular, $email, $genero, $user, $password){
        $this->id_usuario=$id_usuario;
	$this->tipo_usuario=$tipo_usuario;
        $this->tipo_identificacion=$tipo_identificacion;
        $this->num_identificacion=$num_identificacion;
        $this->nombres=$nombres;
	$this->apellidos=$apellidos;
        $this->fecha_nac=$fecha_nac;
	$this->celular=$celular;
	$this->email=$email;
	$this->genero=$genero;
        $this->user=$user;
        $this->password=$password;
    }
//29    
    function setIdusuario($id_usuario){
        $this->id_usuario=$id_usuario;
    }
    
    function getIdusuario(){
        return $this->id_usuario;
    }

    function setTipousuario($tipo_usuario){
        $this->tipo_usuario=$tipo_usuario;
    }
    
    function getTipousuario(){
        return $this->tipo_usuario;
    }

    function setTipoidentificacion($tipo_identificacion){
        $this->tipo_identificacion=$tipo_identificacion;
    }
    
    function getTipoidentificacion(){
        return $this->tipo_identificacion;
    }

    function setNumidentificacion($num_identificacion){
        $this->num_identificacion=$num_identificacion;
    }
    
    function getNumidentificacion(){
        return $this->num_identificacion;
    }
//62
    function setNombres($nombres){
        $this->nombres=$nombres;
    }
    
    function getNombres(){
        return $this->nombres;
    }
    
    function setApellidos($apellidos){
        $this->apellidos=$apellidos;
    }
    
    function getApellidos(){
        return $this->apellidos;
    }

    function setFechanac($fecha_nac){
        $this->fecha_nac=$fecha_nac;
    }
    
    function getFechanac(){
        return $this->fecha_nac;
    }

    function setCelular($celular){
        $this->celular=$celular;
    }
    
    function getCelular(){
        return $this->celular;
    }

    function setEmail($email){
        $this->email=$email;
    }
    
    function getEmail(){
        return $this->email;
    }

    function setGenero($genero){
        $this->genero=$genero;
    }
    
    function getGenero(){
        return $this->genero;
    }
//100
    function setUser($user){
        $this->user=$user;
    }
    
    function getUser(){
        return $this->user;
    }
    
    function setPassword($password){
        $this->password=$password;
    }
    
    function getPassword(){
        return $this->password;
    }
}
?>
