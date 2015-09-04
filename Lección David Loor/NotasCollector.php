<?php

include_once('Notas.php');
include_once('Collector.php');

class NotasCollector extends Collector
{
  function showNotas() {
    $rows = self::$db->getRows("SELECT * FROM notas ");
    $arrayNotas= array();        
    foreach ($rows as $c){
      $aux = new Notas($c{'idnotas'},$c{'parcial'},$c{'final'},$c{'mejoramiento'},$c{'notapromedio'});
      array_push($arrayNotas, $aux);
    }
    return $arrayNotas;        
  }
    
    function consultarDemo($id){
        $row = self::$db->getRow("SELECT * FROM demo WHERE iddemo=$id");
        $Demo = new Demo($row{'iddemo'}, $row{'nombre'});
        return $Demo;
    }
    
    function actualizarDemo($id, $nombre){
        self::$db->updateRow("update demo set nombre=? where iddemo=?", array("{$nombre}", $id));
    }

    function eliminarDemo($id, $nombre){
        self::$db->deleteRow("delete demo where iddemo=?", array($id));
    }
}
?>

