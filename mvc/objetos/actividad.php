<?php

class actividad
{
    private $id_actividad_cardiaca;
    private $fecha_hora;
    private $pulso;
    private $id_usuario;
  
    function __construct($id_actividad_cardiaca, $fecha_hora, $pulso, $id_usuario) {
       $this->id_actividad_cardiaca = $id_actividad_cardiaca;
       $this->fecha_hora = $fecha_hora;
       $this->pulso = $pulso;
       $this->id_usuario = $id_usuario;
       
     }
     
    
     function setIdActividadCardiaca($id_actividad_cardiaca){
       $this->id_actividad_cardiaca = $id_actividad_cardiaca;
     }
 
     function getId_actividad_cardiaca(){
       return $this->id_actividad_cardiaca;
     } 

     function setFecha_hora($fecha_hora){
       $this->fecha_hora = $fecha_hora;
     } 

     function getFecha_hora(){
       return $this->fecha_hora;
     } 

     function setPulso($pulso){
       $this->pulso = $pulso;
     } 

     function getPulso(){
       return $this->pulso;
     } 
  
     function setId_usuario($id_usuario){
       $this->id_usuario = $id_usuario;
     } 

     function getId_usuario(){
       return $this->id_usuario;
     } 

    	
}

?> 
