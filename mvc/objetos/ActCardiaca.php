<?php

class ActCardiaca
{
    private $id_dactividad_cardiaca;
    private $id_usuario;
    private $nombres;
    private $apellidos;
    private $fecha_hora;
    private $pulso;


    function __construct($id_actividad_cardiaca, $id_usuario,$nombres,$apellidos,$fecha_hora, $pulso) {
        $this->id_actividad_cardiaca = $id_actividad_cardiaca;
        $this->id_usuario = $id_usuario;
	$this->$apellidos=$apellidos;       
	$this->nombres = $nombres;
        $this->fecha_hora = $fecha_hora;
        $this->pulso = $pulso;
     }
    
     function setIdCardiaca($id_actividad_cardiaca){
       $this->idactividad_cardiaca = $id_actividad_cardiaca;
     }
 
     function getIdCardiaca(){
       return $this->id_actividad_cardiaca;
     } 

     function setIdUsuario($id_usuario){
       $this->id_usuario = $id_usuario;
     } 

     function getIdUsuario(){
       return $this->id_usuario;
     } 

     function setApellidos($apellidos){
       $this->apellidos = $apellidos;
     } 

	      
     function getApellidos(){
       return $this->apellidos;
     }

     function setNombres($nombres){
       $this->nombres = $nombres;
     } 

     function getNombres(){
       return $this->nombres;
     }
     function setFecha($fecha_hora){
       $this->fecha_hora = $fecha_hora;
     } 

     function getFecha(){
       return $this->fecha_hora;
     } 
  
     function setPulso($pulso){
       $this->pulso = $pulso;
     } 

     function getPulso(){
       return $this->pulso;
     } 

    
	
}

?> 
