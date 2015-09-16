<?php

include_once('AreaTrabajo.php');
include_once('Collector.php');

class AreaTrabajoCollector extends Collector
{
  
  function showAreasTrabajo() {
    $rows = self::$db->getRows("SELECT * FROM area_trabajo ");        
    $arrayAreaTrabajo= array();        
    foreach ($rows as $c){
      $aux = new AreaTrabajo($c{'id_area_trabajo'},$c{'descripcion'});
      array_push($arrayAreaTrabajo, $aux);
    }
    return $arrayAreaTrabajo;        
  }
 
  function showAreaTrabajo($id) {
    $row = self::$db->getRow("SELECT * FROM area_trabajo where id_area_trabajo = $id");   
    //print_r ($row);     
    $AreaTrabajo = new AreaTrabajo($row{'id_area_trabajo'},$row{'descripcion'});
    return $AreaTrabajo;        
  }

  function updateAreaTrabajo($id, $descripcion) {
    $update = self::$db->getRow("Update area_trabajo set descripcion='$descripcion' where id_area_trabajo=$id");             
 return 1;  
  }

  function deleteAreaTrabajo($id) {
   // $delete = self::$db->deleteRow("Delete from area_trabajo where id_area_trabajo=$id");
 $delete = self::$db->getRow("Delete from area_trabajo where id_area_trabajo=$id");   
   return 1;          
  }

  function insertAreaTrabajo($descripcion) {
    $new_row = self::$db->getRow("Insert into area_trabajo (descripcion) values ('$descripcion')");
 return 1;               
  }

  function selectMax() {
    $row = self::$db->getRow("SELECT MAX(id_area_trabajo) from area_trabajo");  
    $max = $row{'max'};
return $max;
  }

}
?>

