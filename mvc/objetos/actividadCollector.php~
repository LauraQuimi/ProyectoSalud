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
 
  /*function showNota($idnotas) {
    $row = self::$db->getRow("SELECT * FROM notas where idnotas = $idnotas");   
    //print_r ($row);     
    $notas = new notas($row{'idnotas'},$row{'parcial'},$row{'final'},$row{'mejoramiento'},$row{'nota_prom'});
    return $notas;        
  }

  function updateNotas($id, $parcial, $finall, $mejoramiento) {
    $update = self::$db->updateRow("Update notas set parcial=$nombre, final=$final, mejoramiento=$mejoramiento where iddemo=$id");             
  }

  function deleteNotas($id) {
    $delete = self::$db->deleteRow("Delete from notas where idnotas=$idnotas");             
  }*/

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
    echo $pulsos;
    return $pulsos;        
  }

}
?>

