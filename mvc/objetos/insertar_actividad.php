<?php
 include_once('notasCollector.php');
 //$id = $_POST['ID'];
 $parcial = $_POST['parcial'];
 $finall = $_POST['finall'];
 $mejoramiento = $_POST['mejoramiento'];
 $nota_prom = $_POST['nota_prom'];
 $notasCollectorObj = new notasCollector();
 $notasCollectorObj->insertNotas($parcial, $finall, $mejoramiento, $nota_prom);

?>
