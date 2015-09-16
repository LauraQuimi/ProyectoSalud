<?php
 include_once('usuarioCollector.php');
 $id_usuario = $_GET['id_usuario']; 
 $usuarioCollectorObj = new usuarioCollector();
 $usuarioCollectorObj->deleteUsuario($id_usuario);

?>
