<?php
include_once("TipoIdentificacionCollector.php");

$id = 1;
 $TipoIdentificacionCollectorObj = new TipoIdentificacionCollector();
?>
<header>
    <h1>Mantenimiento de Tipo de Identificacion</h1>
</header>
<a href="TipoIdentificacion_new_insert.php">Ingresar Tipo de Identificacion</a>

<br/>
<br/>
<table border=1>
    <tr>
      <th>ID</th>
      <th>DESCRIPCION</th>
      <th colspan = 2>OPCIONES</th>
    </tr>
<?php  
foreach ($TipoIdentificacionCollectorObj->showAreasTrabajo() as $c){
?>
  <tr>
     <td><?php echo $c->getIdTipoIdentificacion() ?></td>
     <td><?php echo $c->getDescripcion() ?></td>
     <td><a href="TipoIdentificacion_edit.php?id=<?php echo $c->getIdTipoIdentificacion() ?>">Editar</a></td>
     <td><a href="TipoIdentificacion_delete.php?id=<?php echo $c->getIdTipoIdentificacion() ?>">Eliminar</a></td>
  </tr>
<?php  
}
?>
</table>
