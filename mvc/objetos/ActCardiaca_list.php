<?php
include_once("ActCardiacaCollector.php");
//$id =1;
$ActCardiacaCollectorObj = new ActCardiacaCollector();
?>
<header>
    <h1>Mantenimiento de Actividad Cardiaca</h1>
</header>
<a href="ActCardiaca_new_insert.php">Ingresar Actividad Cardiaca</a>
<table border=1>
  <th>
    <tr>
    <td>ID CARDIACA</td>
    <td>USUARIO</td>
    <td >APELLIDOS DE USUARIO</td>
 <td >NOMBRE DE USUARIO</td>
      
 <td>FECHA</td>
    <td>PULSO</td>
    <td colspan = 2>OPCIONES</td>
    </tr>  
</th>
<?php
foreach ($ActCardiacaCollectorObj->showActCardiacas() as $c){
?>
  <tr>
     <td><?php echo $c->getIdcardiaca() ?></td>
     <td><?php echo $c->getIdUsuario() ?></td>
     <td><?php echo $c->getApellidos() ?></td>
     <td><?php echo $c->getNombres() ?></td>
     <td><?php echo $c->getFecha() ?></td>
     <td><?php echo $c->getPulso() ?></td>
     <td><a href="ActCardiaca_edit.php?id=<?php echo $c->getIdCardiaca() ?>">Editar</a></td>
     <td><a href="ActCardiaca_delete.php?id=<?php echo $c->getIdCardiaca() ?>">Eliminar</a></td>
  </tr>
<?php  
}
?>
</table>
