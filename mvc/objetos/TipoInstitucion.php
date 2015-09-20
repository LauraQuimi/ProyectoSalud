<?php

class TipoInstitucion
{
    private $idTipoInstitucion;
    private $descripcion;
  
    function __construct($idTipoInstitucion, $descripcion) {
       $this->idTipoInstitucion = $idTipoInstitucion;
       $this->descripcion = $descripcion;
     }

   
     function setidTipoInstitucion($idTipoInstitucion){
       $this->idTipoInstitucion = $idTipoInstitucion;
     }
 
     function getidTipoInstitucion(){
       return $this->idTipoInstitucion;
     } 

     function setDescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 

     function getDescripcion(){
       return $this->descripcion;
     } 

  
}

?> 
