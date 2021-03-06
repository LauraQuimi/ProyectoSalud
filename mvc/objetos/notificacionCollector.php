<?php

include_once('notificacion.php');
include_once('Collector.php');

class notificacionCollector extends Collector
{
  
  function showNotificaciones() {
    $rows = self::$db->getRows("SELECT N.ID_NOTIFICACION, N.FECHA_HORA, N.OBSERVACION, TN.DESCRIPCION AS TIPO, D.APELLIDO_CONTACTO AS DESTINATARIO, TR.DESCRIPCION AS RELACION FROM NOTIFICACION AS N, TIPO_NOTIFICACION AS TN, DIRECTORIO AS D, TIPO_RELACION AS TR WHERE (N.ID_TIPO_NOTIFICACION = TN.ID_TIPO_NOTIFICACION) AND (N.ID_DIRECTORIO = D.ID_DIRECTORIO) AND (D.ID_TIPO_RELACION = TR.ID_TIPO_RELACION)");        
    $arrayNotificacion= array();        
    foreach ($rows as $n){
      $aux = new notificacion($n{'id_notificacion'},$n{'fecha_hora'},$n{'observacion'},$n{'tipo'},$n{'destinatario'},$n{'relacion'});
      array_push($arrayNotificacion, $aux);
    }
    return $arrayNotificacion;        
  }


  function deleteNotificacion($id_notificacion) {
    $delete = self::$db->deleteRow("Delete from notificacion where id_notificacion=$id_notificacion");             
  }

  function insertNotificacion($observacion, $id_directorio, $id_tipo_notificacion) {
    
    $new_row = self::$db->insertRow("Insert into notificacion (observacion, id_directorio, id_tipo_notificacion) values ('$observacion',$id_directorio,$id_tipo_notificacion)");             
  }

  function selectMax() {
    $row = self::$db->getRow("SELECT MAX(id_notificacion) from notificacion");  
    $max = $row{'max'};
    return $max;        
  }

}
?>

