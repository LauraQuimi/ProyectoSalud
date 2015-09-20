<?php

include_once('TipoInstitucion.php');
include_once('Collector.php');

class TipoInstitucionCollector extends Collector
{
  
  function showAreasTrabajo() {
    $rows = self::$db->getRows("SELECT * FROM tipo_institucion ");        
    $arrayTipoInstitucion= array();        
    foreach ($rows as $c){
      $aux = new TipoInstitucion($c{'id_tipo_institucion'},$c{'descripcion'});
      array_push($arrayTipoInstitucion, $aux);
    }
    return $arrayTipoInstitucion;        
  }
 
  function showTipoInstitucion($id) {
    $row = self::$db->getRow("SELECT * FROM tipo_institucion where id_tipo_institucion = $id");   
    //print_r ($row);     
    $TipoInstitucion = new TipoInstitucion($row{'id_tipo_institucion'},$row{'descripcion'});
    return $TipoInstitucion;        
  }

  function updateTipoInstitucion($id, $descripcion) {
    $update = self::$db->getRow("Update tipo_institucion set descripcion='$descripcion' where id_tipo_institucion=$id");             
 return 1;  
  }

  function deleteTipoInstitucion($id) {
   // $delete = self::$db->deleteRow("Delete from tipo_institucion where id_tipo_institucion=$id");
 $delete = self::$db->getRow("Delete from tipo_institucion where id_tipo_institucion=$id");   
   return 1;          
  }

  function insertTipoInstitucion($descripcion) {
    $new_row = self::$db->getRow("Insert into tipo_institucion (descripcion) values ('$descripcion')");
 return 1;               
  }

  function selectMax() {
    $row = self::$db->getRow("SELECT MAX(id_tipo_institucion) from tipo_institucion");  
    $max = $row{'max'};
return $max;
  }

}
?>

