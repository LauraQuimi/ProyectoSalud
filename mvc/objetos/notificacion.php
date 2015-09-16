<?php

class notificacion
{
    private $id_notificacion;
    private $fecha_hora;
    private $observacion;
    private $id_directorio;
    private $id_tipo_notificacion;
  
    function __construct($id_notificacion, $fecha_hora, $observacion, $id_directorio, $id_tipo_notificacion) {
       $this->id_notificacion = $id_notificacion;
       $this->fecha_hora = $fecha_hora;
       $this->observacion = $observacion;
       $this->id_directorio = $id_directorio;
       $this->id_tipo_notificacion = $id_tipo_notificacion;
     }
     
    
     function setIdnotificacion($id_notificacion){
       $this->id_notificacion = $id_notificacion;
     }
 
     function getId_notificacion(){
       return $this->id_notificacion;
     } 

     function setFecha_hora($fecha_hora){
       $this->fecha_hora = $fecha_hora;
     } 

     function getFecha_hora(){
       return $this->fecha_hora;
     } 

     function setObservacion($observacion){
       $this->observacion = $observacion;
     } 

     function getObservacion(){
       return $this->observacion;
     } 
  
     function setId_directorio($id_directorio){
       $this->id_directorio = $id_directorio;
     } 

     function getId_directorio(){
       return $this->id_directorio;
     } 

     function setId_tipoNotificacion($id_tipo_notificacion){
       $this->id_tipo_notificacion = $id_tipo_notificacion;
     } 

     function getId_tipoNotificacion(){
       return $this->id_tipo_notificacion;
     } 
}

?> 
