<?php

include_once('TipoIdentificacion.php');
include_once('Collector.php');

class TipoIdentificacionCollector extends Collector
{
  
  function showAreasTrabajo() {
    $rows = self::$db->getRows("SELECT * FROM tipo_identificacion ");        
    $arrayTipoIdentificacion= array();        
    foreach ($rows as $c){
      $aux = new TipoIdentificacion($c{'id_tipo_identificacion'},$c{'descripcion'});
      array_push($arrayTipoIdentificacion, $aux);
    }
    return $arrayTipoIdentificacion;        
  }
 
  function showTipoIdentificacion($id) {
    $row = self::$db->getRow("SELECT * FROM tipo_identificacion where id_tipo_identificacion = $id");   
    //print_r ($row);     
    $TipoIdentificacion = new TipoIdentificacion($row{'id_tipo_identificacion'},$row{'descripcion'});
    return $TipoIdentificacion;        
  }

  function updateTipoIdentificacion($id, $descripcion) {
    $update = self::$db->getRow("Update tipo_identificacion set descripcion='$descripcion' where id_tipo_identificacion=$id");             
 return 1;  
  }

  function deleteTipoIdentificacion($id) {
   // $delete = self::$db->deleteRow("Delete from tipo_identificacion where id_tipo_identificacion=$id");
 $delete = self::$db->getRow("Delete from tipo_identificacion where id_tipo_identificacion=$id");   
   return 1;          
  }

  function insertTipoIdentificacion($descripcion) {
    $new_row = self::$db->getRow("Insert into tipo_identificacion (descripcion) values ('$descripcion')");
 return 1;               
  }

  function selectMax() {
    $row = self::$db->getRow("SELECT MAX(id_tipo_identificacion) from tipo_identificacion");  
    $max = $row{'max'};
return $max;
  }

}
?>

