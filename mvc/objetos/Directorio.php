<?php

class Directorio
{
    private $id_directorio;
    private $nombre_contacto;
    private $apellido_contacto;
    private $celular_contacto;
    private $email_contacto;
    private $id_usuario;
    private $id_tipo_relacion;
    private $nombres;
    private $apellidos;


    function __construct($id_directorio, $nombre_contacto, $apellido_contacto, $celular_contacto, $email_contacto,$id_usuario,$id_tipo_relacion,$nombres,$apellidos)
    {
       $this->id_directorio = $id_directorio;
       $this->nombre_contacto = $nombre_contacto;
       $this->apellido_contacto = $apellido_contacto;
       $this->celular_contacto=$celular_contacto;
       $this->email_contacto=$email_contacto;
       $this->id_usuario = $id_usuario;
       $this->id_tipo_relacion = $id_tipo_relacion;
	$this->nombres = $nombres;
       $this->apellidos = $apellidos;
       
     }
    
     function setIdDirectorio($id_directorio){
       $this->id_directorio = $id_directorio;
     }
 
     function getIdDirectorio(){
       return $this->id_directorio;
     } 

     function setnombre_contacto($nombre_contacto){
       $this->nombre_contacto = $nombre_contacto;
     } 

     function getnombre_contacto(){
       return $this->nombre_contacto;
     } 
  
     function setapellido_contacto($apellido_contacto){
       $this->apellido_contacto = $apellido_contacto;
     } 

     function getapellido_contacto(){
       return $this->apellido_contacto;
     } 

     function setcelular_contacto($celular_contacto){
       $this->celular_contacto = $celular_contacto;
     } 

     function getcelular_contacto(){
       return $this->celular_contacto;
     } 

     function setemail_contacto($email_contacto){
       $this->email_contacto = $email_contacto;
     } 

     function getemail_contacto(){
       return $this->email_contacto;
     } 

     function setIdUsuario($id_usuario){
       $this->id_usuario = $id_usuario;
     } 

     function getIdUsuario(){
       return $this->id_usuario;
     } 

     function setIdTipoRelacion($id_tipo_relacion){
       $this->id_tipo_relacion = $id_tipo_relacion;
     } 

     function getIdTipoRelacion(){
       return $this->id_tipo_relacion;
     } 

     function setnombre($nombres){
       $this->nombres = $nombres;
     } 

     function getNombre(){
       return $this->nombres;
     } 
  
     function setApellido($apellidos){
       $this->apellidos= $apellidos;
     } 

     function getapellido(){
       return $this->apellidos;
     } 
 
	
}

?> 
