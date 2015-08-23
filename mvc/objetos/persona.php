<?php
class registroMedico{
    private $nombre;
    private $apellido;
    private $tipoIdentificacion;
    private $numeroIdentificación;
    private $fechaNacimiento;
    private $email;
    private $usuario;
    private $contraseña;
    private $genero;
    
    function __contruct($nombre, $apellido, $tipoIdentificacion, $numeroIdentificacion, $fechaNacimiento, $email, $usuario, $contraseña, $genero){
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->tipoIdentificacion=$tipoIdentificacion;
        $this->numeroIdentificacion=$numeroIdentificacion;
        $this->fechaNacimiento=$fechaNacimiento;
        $this->email=$email;
        $this->usuario=$usuario;
        $this->contraseña=$contraseña;
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
    
    function setUsuario($usuario){
        $this->usuario=$usuario;
    }
    
    function getUsuario(){
        return $this->usuario;
    }
    
    function setContraseña($contraseña){
        $this->contraseña=$contraseña;
    }
    
    function getContraseña(){
        return $this->contraseña;
    }
    
    function setGenero($genero){
        $this->genero=$genero;
    }
    
    function getGenero(){
        return $this->genero;
    }
}
?>