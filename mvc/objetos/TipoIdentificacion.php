<?php

class TipoIdentificacion
{
    private $idTipoIdentificacion;
    private $descripcion;
  
    function __construct($idTipoIdentificacion, $descripcion) {
       $this->idTipoIdentificacion = $idTipoIdentificacion;
       $this->descripcion = $descripcion;
     }

   
     function setidTipoIdentificacion($idTipoIdentificacion){
       $this->idTipoIdentificacion = $idTipoIdentificacion;
     }
 
     function getidTipoIdentificacion(){
       return $this->idTipoIdentificacion;
     } 

     function setDescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 

     function getDescripcion(){
       return $this->descripcion;
     } 

  
}

?> 
