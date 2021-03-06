<?php

include_once('actividad.php');
include_once('Collector.php');

class actividadCollector extends Collector
{
  
  function showActividad() {
    $rows = self::$db->getRows("SELECT * FROM actividad_cardiaca ");        
    $arrayActividad= array();        
    foreach ($rows as $c){
      $aux = new actividad($c{'id_actividad_cardiaca'},$c{'fecha_hora'},$c{'pulso'},$c{'id_usuario'});
      array_push($arrayActividad, $aux);
    }
    return $arrayActividad;        
  }

  function showActividadxUsuario($id_usuario) {
    $rows = self::$db->getRows("SELECT * FROM actividad_cardiaca where id_usuario = $id_usuario ORDER BY id_actividad_cardiaca DESC limit 30");        
    $arrayActividad= array();        
    foreach ($rows as $c){
      $aux = new actividad($c{'id_actividad_cardiaca'},$c{'fecha_hora'},$c{'pulso'},$c{'id_usuario'});
      array_push($arrayActividad, $aux);
    }
    return $arrayActividad;        
  }
 
  function insertActividad($pulso, $id_usuario) {    
    $new_row = self::$db->insertRow("Insert into actividad_cardiaca (pulso, id_usuario) values ($pulso,$id_usuario)");             
  }

  function selectMax() {
    $row = self::$db->getRow("SELECT MAX(id_actividad_cardiaca) from actividad_cardiaca");  
    $max = $row{'max'};
    return $max;        
  }

   function scanearActividad($id_usuario) {
    $row = self::$db->getRow("SELECT COUNT(*) FROM (SELECT * FROM actividad_cardiaca where id_usuario = $id_usuario ORDER BY id_actividad_cardiaca DESC limit 50) as pulsos WHERE pulsos.pulso = 1");  
    $pulsos = $row{'count'};
    //echo $pulsos;
    return $pulsos;        
  }

}
?>

