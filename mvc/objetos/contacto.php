<?php
class contacto{
    private $id_directorio;
    private $nombre_contacto;
    private $apellido_contacto;
    private $celular_contacto;
    private $email_contacto;
    private $id_usuario;
    private $id_tipo_relacion;
       
    function __construct($id_directorio, $nombre_contacto, $apellido_contacto, $celular_contacto, $email_contacto, $id_usuario, $id_tipo_relacion){
        $this->id_directorio=$id_directorio;
	$this->nombre_contacto=$nombre_contacto;
	$this->apellido_contacto=$apellido_contacto;
    	$this->celular_contacto=$celular_contacto;
	$this->email_contacto=$email_contacto;
	$this->id_usuario=$id_usuario;
        $this->id_tipo_relacion=$id_tipo_relacion;        
    }
    
    function setIddirectorio($id_directorio){
        $this->id_directorio=$id_directorio;
    }
    
    function getIddirectorio(){
        return $this->id_directorio;
    }

    function setNombre_contacto($nombre_contacto){
        $this->nombre_contacto=$nombre_contacto;
    }
    
    function getNombre_contacto(){
        return $this->nombre_contacto;
    }
    
    function setApellido_contacto($apellido_contacto){
        $this->apellido_contacto=$apellido_contacto;
    }
    
    function getApellido_contacto(){
        return $this->apellido_contacto;
    }

    function setCelular_contacto($celular_contacto){
        $this->celular_contacto=$celular_contacto;
    }
    
    function getCelular_contacto(){
        return $this->celular_contacto;
    }

    function setEmail_contacto($email_contacto){
        $this->email_contacto=$email_contacto;
    }
    
    function getEmail_contacto(){
        return $this->email_contacto;
    }

    function setId_usuario($id_usuario){
        $this->id_usuario=$id_usuario;
    }
    
    function getId_usuario(){
        return $this->id_usuario;
    }

    function setId_tiporelacion($id_tipo_relacion){
        $this->id_tipo_relacion=$id_tipo_relacion;
    }
    
    function getId_tiporelacion(){
        return $this->id_tipo_relacion;
    }
}    
?>
