<?php
include_once("DirectorioCollector.php");

//$id =1;
$DirectorioCollectorObj = new DirectorioCollector();
?>
<header>
    <h1><center>Mantenimiento de Contacto</center></h1>
</header>
<a href="Directorio_new_insert.php">Ingresar nuevo Contacto</a>
<br/>
<br/>

<table border=1>
    <tr>
     <th colspan=11>LISTADO DE CONTACTOS</th>

    </tr>
    
    <tr>
     <th>ID</th>
     <th>NOMBBRE</th>
     <th>APELLIDOS</th>
     <th>CELULAR</th>
     <th>EMAIL</th>
     <th>USUARIO</th>
     <th>NOMBRE-USUARIO</th>
     <th>APELLIDO-USUARIO</th>
     <th>TIPO-RELACION</th>
     <th colspan = 2>OPCIONES</td>
   </tr>  
 

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
     <td><?php echo $c->getIdTipoRelacion() ?></td>


     <td><a href="Directorio_edit.php?id=<?php echo $c->getIdDirectorio() ?>">Editar</a></td>
     <td><a href="Directorio_delete.php?id=<?php echo $c->getIdDirectorio() ?>">Eliminar</a></td>
  </tr>
<?php  
}
?>
</table>
