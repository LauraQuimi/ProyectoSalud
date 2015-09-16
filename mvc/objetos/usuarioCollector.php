<?php

include_once('usuario.php');
include_once('Collector.php');

class usuarioCollector extends Collector
{
  
  function showUsuarios() {
    $rows = self::$db->getRows("SELECT * FROM usuario");        
    $arrayUsuario= array();        
    foreach ($rows as $u){
      $aux = new usuario($u{'id_usuario'},$u{'id_tipo_usuario'},$u{'id_tipo_identificacion'},$u{'num_identificacion'},$u{'nombres'},$u{'apellidos'},$u{'fecha_nacimiento'},$u{'celular'},$u{'email'},$u{'genero'},$u{'username'},$u{'password'});
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  }
//19  
  function showUsuario($id_usuario) {
    $u = self::$db->getRow("SELECT * FROM usuario where id_usuario=$id_usuario");   
    $usuario = new usuario($u{'id_usuario'},$u{'id_tipo_usuario'},$u{'id_tipo_identificacion'},$u{'num_identificacion'},$u{'nombres'},$u{'apellidos'},$u{'fecha_nacimiento'},$u{'celular'},$u{'email'},$u{'genero'},$u{'username'},$u{'password'});
    return $usuario;        
  }

  function deleteUsuario($id_usuario) {
    $delete = self::$db->deleteRow("Delete from usuario where id_usuario = $id_usuario");             
  }

  function updateUsuario($id_usuario, $tipo_usuario, $tipo_identificacion, $num_identificacion, $nombres, $apellidos, $fecha_nac, $celular, $email, $genero, $user, $password) {
    $update = self::$db->updateRow("Update usuario set id_tipo_usuario=$tipo_usuario, id_tipo_identificacion=$tipo_identificacion, num_identificacion=$num_identificacion, nombres='$nombres', apellidos='$apellidos', fecha_nacimiento='$fecha_nac', celular=$celular, email='$email', genero=$genero, username='$user', password='$password' where id_usuario=$id_usuario");             
  }

  function insertUsuario($tipo_usuario, $tipo_identificacion, $num_identificacion, $nombres, $apellidos, $fecha_nac, $celular, $email, $genero, $username, $password) {
    $new_row = self::$db->insertRow("Insert into usuario (id_tipo_usuario, id_tipo_identificacion, num_identificacion, nombres, apellidos, fecha_nacimiento, celular, email, genero, username, password) values ($tipo_usuario, $tipo_identificacion, $num_identificacion, '$nombres', '$apellidos', '$fecha_nac', $celular, '$email', $genero, '$username', '$password')");             
  }

   function selectMax() {
    $row = self::$db->getRow("SELECT MAX(id_usuario) from usuario");  
    $max = $row{'max'};
    return $max;        
  }
}
?>
