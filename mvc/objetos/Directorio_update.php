<?php
session_start();
 include_once('DirectorioCollector.php');
 include_once('Directorio.php');
 $id = $_POST['id'];

 $nombre_contacto = $_POST['nombre_contacto'];
 $apellido_contacto = $_POST['apellido_contacto'];
 $celular_contacto = $_POST['celular_contacto'];
 $email_contacto = $_POST['email_contacto'];
 $id_usuario = $_POST['id_usuario'];
 $id_tipo_relacion = $_POST['id_tipo_relacion'];
 
echo $id;
echo $id_usuario;
echo ('kk');
 $DirectorioCollectorObj = new DirectorioCollector();
 $DirectorioCollectorObj->updateDirectorio($id, $nombre_contacto, $apellido_contacto, $celular_contacto, $email_contacto,
 $id_usuario, $id_tipo_relacion);

?>
<html>
   <head>
   <h3>Actualizacion ok</h3>
   </head>
   <body>
      <form action="Directorio_list.php" method="Post">
         <div>
         <input type="submit" name="Regresar al inicio" value="Retornar">
         </div>

      </form>


   </body>

</html>
