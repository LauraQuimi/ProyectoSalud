<?php

class AreaTrabajo
{
    private $idAreaTrabajo;
    private $descripcion;
  
    function __construct($idAreaTrabajo, $descripcion) {
       $this->idAreaTrabajo = $idAreaTrabajo;
       $this->descripcion = $descripcion;
     }

   
     function setidAreaTrabajo($idAreaTrabajo){
       $this->idAreaTrabajo = $idAreaTrabajo;
     }
 
     function getidAreaTrabajo(){
       return $this->idAreaTrabajo;
     } 

     function setDescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 

     function getDescripcion(){
       return $this->descripcion;
     } 

  
}

?> 
