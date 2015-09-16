<?php

include_once('ActCardiaca.php');
include_once('Collector.php');

class ActCardiacaCollector extends Collector
{
  
  function showActCardiacas() {
    $rows = self::$db->getRows("select id_actividad_cardiaca, a.id_usuario,b.apellidos, b.nombres, a.fecha_hora, a.pulso  from actividad_cardiaca a, usuario b
where a.id_usuario=b.id_usuario ");        
    $arrayActCardiaca= array();        
    foreach ($rows as $c){
      $aux = new ActCardiaca($c{'id_actividad_cardiaca'},$c{'id_usuario'},$c{'apellidos'},$c{'nombres'},$c{'fecha_hora'},$c{'pulso'});
      array_push($arrayActCardiaca, $aux);
    }
    return $arrayActCardiaca;        
  }
       
   
 function showactcardiaca($id) {
    $row = self::$db->getRow("SELECT id_actividad_cardiaca, a.id_usuario, b.apellidos, b.nombres, a.fecha_hora, a.pulso FROM actividad_cardiaca a, usuario b where a.id_usuario=b.id_usuario and id_actividad_cardiaca = $id");   
    ///print_r ($row);     
    $actividad_cardiaca = new ActCardiaca($row{'id_actividad_cardiaca'},$row{'id_usuario'},$row{'apellidos'},$row{'nombres'},$row{'fecha_hora'},$row{'pulso'});
    return $actividad_cardiaca;        
  }

  function updateActCardiaca($id, $id_usuario, $fecha_hora, $pulso) {
    $update = self::$db->getRow("Update actividad_cardiaca set id_usuario='$id_usuario', fecha_hora='$fecha_hora', pulso='$pulso' where id_actividad_cardiaca=$id");             
 return 1;  
  }

  function deleteActCardiaca($id) {
   // $delete = self::$db->deleteRow("Delete from actividad_cardiaca where id_actividad_cardiaca=$id");
 $delete = self::$db->getRow("Delete from actividad_cardiaca where id_actividad_cardiaca=$id");   
   return 1;          
  }
           
  function insertActCardiaca($id_usuario,$fecha_hora,$pulso) {
    $new_row = self::$db->getRow("Insert into actividad_cardiaca (id_usuario, fecha_hora, pulso) values ('$id_usuario','$fecha_hora','$pulso')");
 return 1;               
  }

  function selectMax() {
    $row = self::$db->getRow("SELECT MAX(id_actividad_cardiaca) from actividad_cardiaca");  
    $max = $row{'max'};
    return $max;        
  }

}
?>

