<?php
 include_once('usuario.php');
 include_once('usuarioCollector.php');
 $usuarioCollectorObj = new usuarioCollector();
 $max = $usuarioCollectorObj->selectMax();
 $max=($max+1);
?>
<!DOCTYPE html>
 <html lang="es">
  <head>
   <meta charset ="utf-8">
   <title> Nuevo Usuario </title>
  </head>
  <body>
   <?php //echo $max; ?>
    <form action ="insertar_usuario.php" method ="post">
     <fieldset>
      <label> ID </label>
      <input type="text" name= "id_usuario" value = "<?php echo $max; ?>" /> </br>
      <label> TIPO USUARIO</label>
      <input type="text" name= "tipo_usuario" value = "1.- medico 2.- paciente"/> </br>
      <label> TIPO IDENTIFICACION</label>
      <input type="text" name= "tipo_identificacion" value = "1.- cedula 2.- pasaporte 3.- historia clinica"/> </br>
      <label> # IDENTIFICACION</label>
      <input type="text" name= "num_identificacion" value = "Ejem: 1234567890"/> </br>
      <label> NOMBRES</label>
      <input type="text" name= "nombres" value = "nombre"/> </br>
      <label> APELLIDOS</label>
      <input type="text" name= "apellidos" value = "apellido"/></br>
      <label> FECHA NAC</label>
      <input type="text" name= "fecha_nac" value = "yyyy/mm/dd"/> </br>
      <label> CELULAR</label>
      <input type="text" name= "celular" value = "0999999999"/> </br>
      <label> EMAIL</label>
      <input type="text" name= "email" value = "xxxxxxxxxxx@example.com"/> </br>
      <label> GENERO</label>
      <input type="text" name= "genero" value = "1.- masculino 2.- femenino"/> </br>
      <label> USER</label>
      <input type="text" name= "user" value = "username"/> </br>
      <label> PASSWORD</label>
      <input type="text" name= "password" value = "password"/> </br>
      <button type = "submit"> ACEPTAR </button>
      <button type="button"><a href = "usuario_list.php">CANCELAR</a> </button>
     </fieldset>
    </form> 
  </body>
 </html>
