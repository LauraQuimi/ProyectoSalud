<?php
include_once("AreaTrabajoCollector.php");

$id = 1;
 $AreaTrabajoCollectorObj = new AreaTrabajoCollector();
?>
<header>
    <h1>Mantenimiento de Area de Trabajos</h1>
</header>
<a href="AreaTrabajo_new_insert.php">Ingresar Area de Trabajo</a>

<br/>
<br/>
<table border=1>
    <tr>
      <th>ID</th>
      <th>DESCRIPCION</th>
      <th colspan = 2>OPCIONES</th>
    </tr>
<?php  
foreach ($AreaTrabajoCollectorObj->showAreasTrabajo() as $c){
?>
  <tr>
     <td><?php echo $c->getIdAreaTrabajo() ?></td>
     <td><?php echo $c->getDescripcion() ?></td>
     <td><a href="AreaTrabajo_edit.php?id=<?php echo $c->getIdAreaTrabajo() ?>">Editar</a></td>
     <td><a href="AreaTrabajo_delete.php?id=<?php echo $c->getIdAreaTrabajo() ?>">Eliminar</a></td>
  </tr>
<?php  
}
?>
</table>
