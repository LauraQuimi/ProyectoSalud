<?php
include_once("DirectorioCollector.php");

//$id =1;
$DirectorioCollectorObj = new DirectorioCollector();
?>
<header>
    <h1>Mantenimiento de Directorio</h1>
</header>
<a href="Directorio_new_insert.php">Ingresar Directorio</a>
<table border=1>
  <th>
    <tr>
    <td>ID</td>
    <td>NOMBBRE</td>
    <td>APELLIDOS</td>
    <td>CELULAR</td>
    <td>EMAIL</td>
    <td>USUARIO</td>
    <td>NOMBRE-USUARIO</td>
    <td>APELLIDO-USUARIO</td>

   <td colspan = 2>OPCIONES</td>
    </tr>  
</th>
<?php
foreach ($DirectorioCollectorObj->showDirectorios() as $c){
?>
  <tr>
     <td><?php echo $c->getIdDirectorio() ?></td>
     <td><?php echo $c->getNombre_contacto() ?></td>
     <td><?php echo $c->getApellido_contacto() ?></td>
     <td><?php echo $c->getCelular_contacto() ?></td>
     <td><?php echo $c->getEmail_contacto() ?></td>
     <td><?php echo $c->getIdUsuario() ?></td>
     <td><?php echo $c->getNombre() ?></td>
      <td><?php echo $c->getApellido() ?></td>

     <td><a href="Directorio_edit.php?id=<?php echo $c->getIdDirectorio() ?>">Editar</a></td>
     <td><a href="Directorio_delete.php?id=<?php echo $c->getIdDirectorio() ?>">Eliminar</a></td>
  </tr>
<?php  
}
?>
</table>
