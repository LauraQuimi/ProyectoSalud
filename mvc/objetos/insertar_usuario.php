<?php
 include_once('usuarioCollector.php');
 //$id = $_POST['ID'];
 $tipo_usuario = $_POST['tipo_usuario'];
 $tipo_identificacion = $_POST['tipo_identificacion'];
 $num_identificacion = $_POST['num_identificacion'];
 $nombres = $_POST['nombres'];
 $apellidos = $_POST['apellidos'];
 $fecha_nac = $_POST['fecha_nac'];
 $celular = $_POST['celular'];
 $email = $_POST['email'];
 $genero = $_POST['genero'];
 $user = $_POST['user'];
 $password = $_POST['password'];
 $usuarioCollectorObj = new usuarioCollector();
 $usuarioCollectorObj->insertUsuario($tipo_usuario, $tipo_identificacion, $num_identificacion, $nombres, $apellidos, $fecha_nac, $celular,$email, $genero, $user, $password);

?>
