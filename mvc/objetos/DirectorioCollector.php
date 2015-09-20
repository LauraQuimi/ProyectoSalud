<?php

include_once('Directorio.php');
include_once('Collector.php');

class DirectorioCollector extends Collector
{
  
  function showDirectorios() {
    $rows = self::$db->getRows("SELECT id_directorio, nombre_contacto, apellido_contacto, celular_contacto, email_contacto, a.id_usuario, a.id_tipo_relacion, b.nombres, b.apellidos  
FROM directorio a, usuario b where a.id_usuario=b.id_usuario
");        
    $arrayDirectorio= array();        
    foreach ($rows as $c){
      $aux = new Directorio($c{'id_directorio'},$c{'nombre_contacto'},$c{'apellido_contacto'},$c{'celular_contacto'},$c{'email_contacto'},$c{'id_usuario'},$c{'nombres'},$c{'apellidos'},$c{'id_tipo_relacion'});
      array_push($arrayDirectorio, $aux);
    }
    return $arrayDirectorio;        
  }
          
 function showDirectorio($id) {
    $row = self::$db->getRow("SELECT id_directorio, nombre_contacto, apellido_contacto, celular_contacto, 
email_contacto, a.id_usuario, id_tipo_relacion, b.nombres, b.apellidos  FROM directorio a, usuario b
where a.id_usuario=b.id_usuario and id_directorio = $id");   
    //print_r ($row);     
    $directorio = new Directorio($row{'id_directorio'},$row{'nombre_contacto'},$row{'apellido_contacto'},$row{'celular_contacto'},$row{'email_contacto'},$row{'id_usuario'},$row{'nombres'},$row{'apellidos'},$row{'id_tipo_relacion'});
    return $directorio;        
  }

  function updateDirectorio($id,  $nombre_contacto, $apellido_contacto,$celular_contacto,$email_contacto,$id_usuario,$id_tipo_relacion) {
echo $id;
echo $id_usuario;
    $update = self::$db->getRow("Update directorio set   nombre_contacto='$nombre_contacto', 
apellido_contacto='$apellido_contacto', celular_contacto='$celular_contacto', email_contacto='$email_contacto', id_usuario='$id_usuario', id_tipo_relacion='$id_tipo_relacion'
 where id_directorio=$id");             
 return 1;  
  }

  function deleteDirectorio($id) {
   // $delete = self::$db->deleteRow("Delete from directorio where id_directorio=$id");
 $delete = self::$db->getRow("Delete from directorio where id_directorio=$id");   
   return 1;          
  }
           
  function insertDirectorio($nombre_contacto,$apellido_contacto,$celular_contacto,$email_contacto,$id_usuario,$id_tipo_relacion) {
    $new_row = self::$db->getRow("Insert into directorio (nombre_contacto, apellido_contacto, celular_contacto, email_contacto, id_usuario, id_tipo_relacion) values ('$nombre_contacto','$apellido_contacto','$celular_contacto','$email_contacto','$id_usuario','$id_tipo_relacion')");
 return 1;               
  }

  function selectMax() {
    $row = self::$db->getRow("SELECT MAX(id_directorio) from directorio");  
    $max = $row{'max'};
    return $max;        
  }

}
?>

