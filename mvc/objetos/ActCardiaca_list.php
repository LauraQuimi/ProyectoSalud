<?php
include_once("ActCardiacaCollector.php");
//$id =1;
$ActCardiacaCollectorObj = new ActCardiacaCollector();
?>
<header>
    <h1><center>Mantenimiento de Actividad Cardiaca</center></h1>
</header>
<a href="ActCardiaca_new_insert.php">Ingresar Actividad Cardiaca</a>
<table border=1>
  <tr>
   <th colspan=8>LISTADO DE ACTIVIDAD CARDIACA</th>
  </tr>

    <tr>
     <th>ID CARDIACA</thd>
     <th>USUARIO</th>
     <th >APELLIDOS DE USUARIO</th>
     <th >NOMBRE DE USUARIO</th>
     <th>FECHA</th>
     <th>PULSO</th>
     <th colspan = 2>OPCIONES</th>
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
