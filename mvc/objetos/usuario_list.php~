<?php
include_once("usuarioCollector.php");

$id =1;

$usuarioCollectorObj = new usuarioCollector();
?>
<a href="nuevo_usuario.php">Nuevo</a>
<table border=1>
  <th>
    <td>TIPO USUARIO</td>
    <td>TIPO IDENT</td>
    <td>NUM IDENT</td>
    <td>NOMBRES</td>
    <td>APELLIDOS</td>
    <td>FECHA NAC</td>
    <td>CELULAR</td>
    <td>EMAIL</td>
    <td>GENERO</td>
    <td>USER</td>
    <td>PASSWORD</td>
    <td colspan = 2>OPCIONES</td>
  </th>
<?php
foreach ($usuarioCollectorObj->showUsuarios() as $c){
?>
  <tr>
     <td><?php echo $c->getIdusuario() ?></td>
     <td><?php echo $c->getTipousuario() ?></td>
     <td><?php echo $c->getTipoidentificacion() ?></td>
     <td><?php echo $c->getNumidentificacion() ?></td>
     <td><?php echo $c->getNombres() ?></td>
     <td><?php echo $c->getApellidos() ?></td>
     <td><?php echo $c->getFechanac() ?></td>
     <td><?php echo $c->getCelular() ?></td>
     <td><?php echo $c->getEmail() ?></td>
     <td><?php echo $c->getGenero() ?></td>
     <td><?php echo $c->getUser() ?></td>
     <td><?php echo $c->getPassword() ?></td>
     <td><a href="editar_usuario.php?id=<?php echo $c->getIdusuario() ?>">Editar</a></td>
     <td><a href="eliminar_usuario.php?id=<?php echo $c->getIdusuario() ?>">Eliminar</a></td>
  </tr>
<?php  
}
?>
</table>
