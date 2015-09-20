<?php
include_once("TipoInstitucionCollector.php");

$id = 1;
 $TipoInstitucionCollectorObj = new TipoInstitucionCollector();
?>
<header>
    <h1>Mantenimiento de Tipo de Institucion</h1>
</header>
<a href="TipoInstitucion_new_insert.php">Ingresar Tipo de Institucion</a>

<br/>
<br/>
<table border=1>
    <tr>
      <th>ID</th>
      <th>DESCRIPCION</th>
      <th colspan = 2>OPCIONES</th>
    </tr>
<?php  
foreach ($TipoInstitucionCollectorObj->showAreasTrabajo() as $c){
?>
  <tr>
     <td><?php echo $c->getIdTipoInstitucion() ?></td>
     <td><?php echo $c->getDescripcion() ?></td>
     <td><a href="TipoInstitucion_edit.php?id=<?php echo $c->getIdTipoInstitucion() ?>">Editar</a></td>
     <td><a href="TipoInstitucion_delete.php?id=<?php echo $c->getIdTipoInstitucion() ?>">Eliminar</a></td>
  </tr>
<?php  
}
?>
</table>
