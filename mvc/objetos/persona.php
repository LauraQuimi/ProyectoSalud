<?php
class registroMedico{
    private $nombre;
    private $apellido;
    private $tipoIdentificacion;
    private $numeroIdentificación;
    private $fechaNacimiento;
    private $email;
    private $user;
    private $password;
    private $genero;
    
    function __contruct($nombre, $apellido, $tipoIdentificacion, $numeroIdentificacion, $fechaNacimiento, $email, $user, $password, $genero){
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->tipoIdentificacion=$tipoIdentificacion;
        $this->numeroIdentificacion=$numeroIdentificacion;
        $this->fechaNacimiento=$fechaNacimiento;
        $this->email=$email;
        $this->user=$user;
        $this->password=$password;
        $this->genero=$genero;
    }
    
    function setNombre($nombre){
        $this->nombre=$nombre;
    }
    
    function getNombre(){
        return $this->nombre;
    }
    
    function setApellido($apellido){
        $this->apellido=$apellido;
    }
    
    function getApellido(){
        return $this->apellido;
    }
    
    function setTipoIdentificacion($tipoIdentificacion){
        $this->tipoIdentificacion=$tipoIdentificacion;
    }
    
    function getTipoIdentificacion(){
        return $this->tipoIdentificacion;
    }
    
    function setNumeroIdentificacion($numeroIdentificacion){
        $this->numeroIdentificacion=$numeroIdentificacion;
    }
    
    function getNumeroIdentificacion(){
        return $this->numeroIdentificacion;
    }
    
    function setFechaNacimiento($fechaNacimiento){
        $this->fechaNacimiento=$fechaNacimiento;
    }
    
    function getFechaNacimiento(){
        return $this->fechaNacimiento;
    }
    
    function setEmail($email){
        $this->email=$email;
    }
    
    function getEmail(){
        return $this->email;
    }
    
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
    
    function setGenero($genero){
        $this->genero=$genero;
    }
    
    function getGenero(){
        return $this->genero;
    }
}
?>
