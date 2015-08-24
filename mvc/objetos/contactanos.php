<?php
class contactanos{
    private $nombre;
    private $email;
    private $telefono;
    private $mensaje;
    
    function __construct($nombre, $email, $telefono, $mensaje){
        $this->nombre=$nombre;
        $this->email=$email;
        $this->telefono=$telefono;
        $this->mensaje=$mensaje;
    }
    
    function setNombre($nombre){
        $this->nombre=$nombre;
    }
    
    function getNombre(){
        return $this->nombre;
    }
    
    function setEmail($email){
        $this->email=$email;
    }
    
    function getEmail(){
        return $this->email;
    }
    
    function setTelefono($telefono){
        $this->telefono=$telefono;
    }
    
    function getTelefono(){
        return $this->telefono;
    }
    
    function setMensaje($mensaje){
        $this->mensaje=$mensaje;
    }
    
    function getMensaje(){
        return $this->mensaje;
    }
}
?>