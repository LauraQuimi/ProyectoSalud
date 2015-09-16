<?php
 //$id=1;
 $id = $_GET['id'];
 include_once('usuario.php');
 include_once('usuarioCollector.php');
 $usuarioCollectorObj = new usuarioCollector();
 $ObjUsuario = $usuarioCollectorObj->showUsuario($id);
 //print_r($ObjDemo);
?>
<!DOCTYPE html>
 <html lang="es">
  <head>
   <meta charset ="utf-8">
   <title> Editar Usuario </title>
  </head>
  <body>
    <form action ="actualizar_usuario.php" method ="post">
     <fieldset>
      <label> ID </label>
      <input type="text" name= "id_usuario" value = "<?php echo $ObjUsuario->getIdusuario(); ?>" /> </br>
      <label> TIPO USUARIO</label>
      <input type="text" name= "tipo_usuario" value = "<?php echo $ObjUsuario->getTipousuario(); ?>"/> </br>
      <label> TIPO IDENTIFICACION</label>
      <input type="text" name= "tipo_identificacion" value = "<?php echo $ObjUsuario->getTipoidentificacion(); ?>"/> </br>
      <label> # IDENTIFICACION</label>
      <input type="text" name= "num_identificacion" value = "<?php echo $ObjUsuario->getNumidentificacion(); ?>"/> </br>
      <label> NOMBRES</label>
      <input type="text" name= "nombres" value = "<?php echo $ObjUsuario->getNombres(); ?>"/> </br>
      <label> APELLIDOS</label>
      <input type="text" name= "apellidos" value = "<?php echo $ObjUsuario->getApellidos(); ?>"/></br>
      <label> FECHA NAC</label>
      <input type="text" name= "fecha_nac" value = "<?php echo $ObjUsuario->getFechanac(); ?>"/> </br>
      <label> CELULAR</label>
      <input type="text" name= "celular" value = "<?php echo $ObjUsuario->getCelular(); ?>"/> </br>
      <label> EMAIL</label>
      <input type="text" name= "email" value = "<?php echo $ObjUsuario->getEmail(); ?>m"/> </br>
      <label> GENERO</label>
      <input type="text" name= "genero" value = "<?php echo $ObjUsuario->getGenero(); ?>"/> </br>
      <label> USER</label>
      <input type="text" name= "user" value = "<?php echo $ObjUsuario->getUser(); ?>"/> </br>
      <label> PASSWORD</label>
      <input type="text" name= "password" value = "<?php echo $ObjUsuario->getPassword(); ?>"/> </br>
      <button type = "submit"> ACEPTAR </button>
      <button><a href = "usuario_list.php">CANCELAR</a> </button>
     </fieldset>
    </form> 
  </body>
 </html>
