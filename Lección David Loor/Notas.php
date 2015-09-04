<?php

class Notas
{
    private $idNotas;
    private $parcial;
    private $nFinal;
    private $mejoramiento;
    private $promedio;
    
     function __construct($idNotas, $parcial, $nFinal, $mejoramiento, $promedio) {
       $this->idNotas = $idNotas;
       $this->parcial = $parcial;
         $this->nFinal = $nFinal;
         $this->mejoramiento = $mejoramiento;
         $this->promedio = $promedio;
     }
    
     function setIdNotas($idNotas){
       $this->idNotas = $idNotas;
     } 
     function getIdNotas(){
       return $this->idNotas;
     } 
     function setParcial($parcial){
       $this->parcial = $parcial;
     } 
     function getParcial(){
       return $this->parcial;
     }
     function setNFinal($nFinal){
       $this->nFinal = $nFinal;
     } 
     function getNFinal(){
       return $this->nFinal;
     } 
     function setMejoramiento($mejoramiento){
       $this->mejoramiento = $mejoramiento;
     } 
     function getMejoramiento(){
       return $this->mejoramiento;
     } 
     function setPromedio($promedio){
       $this->promedio = $promedio;
     } 
     function getPromedio(){
       return $this->promedio;
     } 
}

?> 
