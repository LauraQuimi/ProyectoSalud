<?php

include_once('notificacion.php');
include_once('Collector.php');

class notificacionCollector extends Collector
{
  
  function showNotificaciones() {
    $rows = self::$db->getRows("SELECT * FROM notificacion ");        
    $arrayNotificacion= array();        
    foreach ($rows as $n){
      $aux = new notificacion($n{'id_notificacion'},$n{'fecha_hora'},$n{'observacion'},$n{'id_directorio'},$n{'id_tipo_notificacion'});
      array_push($arrayNotificacion, $aux);
    }
    return $arrayNotificacion;        
  }

  /*function shownotificacionxUsuario() {
    $rows = self::$db->getRows("SELECT * FROM notificacion_cardiaca where id_usuario = 2");        
    $arraynotificacion= array();        
    foreach ($rows as $n){
      $aux = new notificacion($n{'id_notificacion_cardiaca'},$n{'fecha_hora'},$n{'pulso'},$n{'id_usuario'});
      array_push($arraynotificacion, $aux);
    }
    return $arraynotificacion;        
  }*/
 
  /*function showNota($idnotas) {
    $row = self::$db->getRow("SELECT * FROM notas where idnotas = $idnotas");   
    //print_r ($row);     
    $notas = new notas($row{'idnotas'},$row{'parcial'},$row{'final'},$row{'mejoramiento'},$row{'nota_prom'});
    return $notas;        
  }

  function updateNotas($id, $parcial, $finall, $mejoramiento) {
    $update = self::$db->updateRow("Update notas set parcial=$nombre, final=$final, mejoramiento=$mejoramiento where iddemo=$id");             
  }*/

  function deleteNotificacion($id_notificacion) {
    $delete = self::$db->deleteRow("Delete from notificacion where id_notificacion=$id_notificacion");             
  }

  function insertNotificacion($observacion, $id_directorio, $id_tipo_notificacion) {
    
    $new_row = self::$db->insertRow("Insert into notificacion (observacion, id_directorio, id_tipo_notificacion) values ('$observacion',$id_directorio,$id_tipo_notificacion)");             
  }

  function selectMax() {
    $row = self::$db->getRow("SELECT MAX(id_notificacion) from notificacion");  
    $max = $row{'max'};
    return $max;        
  }

}
?>

