<?php
 include_once('usuarioCollector.php');
 include_once('DirectorioCollector.php');
 $tipo_usuario=2;
 $tipo_identificacion = $_POST['cbxIdentificacionPac'];
 $num_identificacion = $_POST['txtIdentificacionPac'];
 $nombres = $_POST['txtNombrePac'];
 $apellidos = $_POST['txtApellidoPac'];
 $fecha_nac = $_POST['dtpFecNacPac'];
 $celular='0979124745'; 
 $email = $_POST['txtEmailPac'];
 $genero = $_POST['genero'];
 $user = $_POST['txtUserPac'];
 $password = $_POST['txtPasswordPac'];
 $usuarioCollectorObj = new usuarioCollector();
 $usuarioCollectorObj->insertUsuario($tipo_usuario, $tipo_identificacion, $num_identificacion, $nombres, $apellidos, $fecha_nac, $celular,$email, $genero, $user, $password);
 $id_usuario = $usuarioCollectorObj->obtenerId($user); 
 $nombre_contacto = $_POST['txtNombreCon'];
 $apellido_contacto = $_POST['txtApellidoCon'];
 $celular_contacto = $_POST['txtCelularCon'];
 $email_contacto = $_POST['txtEmailCon'];
 $id_tipo_relacion=2;
 $DirectorioCollectorObj = new DirectorioCollector();
 $DirectorioCollectorObj->insertDirectorio($nombre_contacto, $apellido_contacto, $celular_contacto, $email_contacto, 
 $id_usuario, $id_tipo_relacion);
 include_once('../../index.php');
?>
