<?php
 include_once('DemoCollector.php');
 $id = $_POST['ID'];
 $nombre = $_POST['Nombre'];
 $apellido = $_POST['Apellido'];
 $DemoCollectorObj = new DemoCollector();
 $DemoCollectorObj->updateDemo($id, $nombre, $apellido);

?>
