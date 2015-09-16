<?php
include_once("notificacionCollector.php");

//$id =1;
$notificacionCollectorObj = new notificacionCollector();
?>
<header>
    <h3>Listado de Notificaciones</h3>
</header>
<table border=1>
  <th>
    <tr>
    <td>ID</td>
    <td>FECHA / HORA</td>
    <td>OBSERVACION</td>
    <td>TIPO</td>
    <td>DESTINATARIO</td>
    <td>RELACION</td>
    <td>OPCIONES</td>
    
    </tr>  
</th>
<?php
foreach ($notificacionCollectorObj->showNotificaciones() as $c){
?>
  <tr>
     <td><?php echo $c->getId_notificacion() ?></td>
     <td><?php echo $c->getFecha_hora() ?></td>
     <td><?php echo $c->getObservacion() ?></td>
     <td><?php echo $c->getId_tipoNotificacion() ?></td>
     <td><?php echo $c->getId_directorio() ?></td>
     <td><?php echo $c->getAux1() ?></td>
     
     <td><a href="notificacion_delete.php?id=<?php echo $c->getId_notificacion() ?>">Eliminar</a></td>
  </tr>
<?php  
}
?>
</table>
