<?php
 include_once('DirectorioCollector.php');
//clude_once('Collector.php');
 //$id = $_POST['ID'];
 $nombre_contacto = $_POST['nombre_contacto'];
 $apellido_contacto = $_POST['apellido_contacto'];
 $celular_contacto = $_POST['celular_contacto'];
 $email_contacto = $_POST['email_contacto'];
 $id_usuario = $_POST['id_usuario'];
 $id_tipo_relacion = $_POST['id_tipo_relacion'];

print_r('nombre');
print_r($nombre_contacto);
print_r('nombre1');
print_r($apellido_contacto);
print_r($celular_contacto);
print_r($email_contacto);
print_r($id_usuario);
print_r($id_tipo_relacion);
$DirectorioCollectorObj = new DirectorioCollector();
$DirectorioCollectorObj->insertDirectorio($nombre_contacto, $apellido_contacto, $celular_contacto, $email_contacto, 
$id_usuario, $id_tipo_relacion);
?>
<html>
   <head>
   <h3>Insercion ok</h3>
   </head>
   <body>
      <form action="Directorio_list.php" method="Post">
         <div>
         <input type="submit" name="Regresar al inicio" value="Retornar">
         </div>

      </form>


   </body>

</html>
