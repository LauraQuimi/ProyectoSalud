<?php
session_start();
 include_once('TipoIdentificacionCollector.php');
 include_once('TipoIdentificacion.php');
 $id = $_POST['id'];
 $descripcion = $_POST['descripcion'];
 $TipoIdentificacionCollectorObj = new TipoIdentificacionCollector();
 $TipoIdentificacionCollectorObj->updateTipoIdentificacion($id, $descripcion);

?>
<html>
   <head>
   <h3>Actualizacion ok</h3>
   </head>
   <body>
      <form action="TipoIdentificacion_list.php" method="Post">
         <div>
         <input type="submit" name="Regresar al inicio" value="Retornar">
         </div>

      </form>


   </body>

</html>
