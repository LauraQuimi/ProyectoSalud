<?php
class datosProfesionales{
    private $universidad;
    private $tituloObtenido;
    private $anioGraduacion;
    
    function __contruct($universidad, $tituloObtenido, $anioGraduacion){
        $this->universidad=$universidad;
        $this->tituloObtenido=$tituloObtenido;
        $this->anioGraduacion=$anioGraduacion;
    }
    
    function setUniversidad($universidad){
        $this->universidad=$universidad;
    }
    
    function getUniversidad(){
        return $this->universidad;
    }
    
    function setTituloObtenido($tituloObtenido){
        $this->tituloObtenido=$tituloObtenido;
    }
    
    function getTituloObtenido(){
        return $this->tituloObtenido;
    }
    
    function setAnioGraduacion($anioGraduacion){
        $this->anioGraduacion=$anioGraduacion;
    }
    
    function getAnioGraduacion(){
        return $this->anioGraduacion;
    }
}
?>