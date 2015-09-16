<?php

include_once('contacto.php');
include_once('Collector.php');

class contactoCollector extends Collector
{
  
  function showContactos() {
    $rows = self::$db->getRows("SELECT * FROM directorio");        
    $arrayContacto= array();        
    foreach ($rows as $c){
      $aux = new contacto($c{'id_directorio'},$c{'nombre_contacto'},$c{'apellido_contacto'},$c{'celular_contacto'},$c{'email_contacto'},$c{'id_usuario'},$c{'id_tipo_relacion'});
      array_push($arrayContacto, $aux);
    }
    return $arrayContacto;        
  }

  function showContactosxUsuario($id_usuario) {
    $rows = self::$db->getRows("SELECT * FROM directorio where id_usuario = $id_usuario");        
    $arrayContacto= array();        
    foreach ($rows as $c){
      $aux = new contacto($c{'id_directorio'},$c{'nombre_contacto'},$c{'apellido_contacto'},$c{'celular_contacto'},$c{'email_contacto'},$c{'id_usuario'},$c{'id_tipo_relacion'});
      array_push($arrayContacto, $aux);
    }
    return $arrayContacto;        
  }
  
 /* function showContactosxUser($id_usuario) {
    $c = self::$db->getRow("SELECT * FROM directorio where id_usuario='$id_usuario'");   
    $contacto = new contacto($c{'id_contacto'},$c{'id_tipo_contacto'},$c{'id_tipo_identificacion'},$c{'num_identificacion'},$c{'nombre_contacto'},$c{'apellido_contacto'},$c{'fecha_nacimiento'},$c{'celular_contacto'},$c{'email_contacto'},$c{'id_usuario'},$c{'id_tipo_relacion'},$c{'password'});
    return $contacto;        
  }*/

  function deteteContacto($id_directorio) {
    $delete = self::$db->deleteRow("Delete from directorio where id_directorio=$id_directorio");             
  }

  function updateContacto($id_directorio, $nombre_contacto, $apellido_contacto, $celular_contacto, $email_contacto, $id_usuario, $id_tipo_relacion) {
    $update = self::$db->updateRow("Update directorio set nombre_contacto='$nombre_contacto', apellido_contacto='$apellido_contacto', celular_contacto='$celular_contacto', email_contacto='$email_contacto', id_usuario=$id_usuario, id_tipo_relacion=$id_tipo_relacion where id_directorio=$id_directorio");             
  }

  function insertContacto($nombre_contacto, $apellido_contacto, $celular_contacto, $email_contacto, $id_usuario, $id_tipo_relacion) {
    $new_row = self::$db->insertRow("Insert into directorio (nombre_contacto, apellido_contacto, celular_contacto, email_contacto, id_usuario, id_tipo_relacion) values ('$nombre_contacto', '$apellido_contacto', '$celular_contacto', '$email_contacto', $id_usuario, $id_tipo_relacion)");             
  }
}
?>
