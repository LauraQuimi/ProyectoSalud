<?php
class datosLaborales{
    private $tipoInstitucion;
    private $nombreInstitucion;
    private $areaTrabajo;
    private $anioIngreso;
    
    function __construct($tipoInstitucion, $nombreInstitucion, $areaTrabajo, $anioIngreso){
        $this->tipoInstitucion=$tipoInstitucion;
        $this->nombreInstitucion=$nombreInstitucion;
        $this->areaTrabajo=$areaTrabajo;
        $this->anioIngreso=$anioIngreso;
    }
    
    function setTipoInstitucion($tipoInstitucion){
        $this->tipoInstitucion=$tipoInstitucion;
    }
    
    function getTipoInstitucion(){
        return $this->tipoInstitucion;
    }
    
    function setNombreInstitucion($nombreInstitucion){
        $this->nombreInstitucion=$nombreInstitucion;
    }
    
    function getNombreInstitucion(){
        return $this->nombreInstitucion;
    }
    
    function setAreaTrabajo($areaTrabajo){
        $this->areaTrabajo=$areaTrabajo;
    }
    
    function getAreaTrabajo(){
        return $this->areaTrabajo;
    }
    
    function setAnioIngreso($anioIngreso){
        $this->anioIngreso=$anioIngreso;
    }
    
    function getAnioIngreso(){
        return $this->anioIngreso;
    }
}
?>