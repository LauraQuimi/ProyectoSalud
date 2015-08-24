<?php

include_once('persona.php');
include_once('Collector.php');

class personaCollector extends Collector
{
  
  function showPersonas() {
    $rows = self::$db->getRows("SELECT * FROM persona ");        
    $arrayPersona= array();        
    foreach ($rows as $p){
      $aux = new persona($p{'nombre'},$p{'apellido'},$p{'tipoIdentificacion'},$p{'numeroIdentificacion'},$p{'fechaNacimiento'},$p{'email'},$p{'user'},$p{'password'},$p{'genero'});
      array_push($arrayPersona, $aux);
    }
    return $arrayDemo;        
  }
  
  function showPersona($user) {
    $p = self::$db->getRow("SELECT * FROM persona where user='$user'");   
    $persona = new persona($p{'nombre'},$p{'apellido'},$p{'tipoIdentificacion'},$p{'numeroIdentificacion'},$p{'fechaNacimiento'},$p{'email'},$p{'user'},$p{'password'},$p{'genero'});
    return $persona;        
  }

  function detetePersona($user) {
    $delete = self::$db->deleteRow("Delete from persona where user='$user'");             
  }

}
?>
