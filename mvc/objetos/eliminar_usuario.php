<?php
 include_once('usuarioCollector.php');
 $id_usuario = $_GET['id']; 
 $usuarioCollectorObj = new usuarioCollector();
 $usuarioCollectorObj->deleteUsuario($id_usuario);

?>
