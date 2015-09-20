<?php
session_start();
 include_once('TipoIdentificacionCollector.php');
 include_once('TipoIdentificacion.php');
 $id = $_GET['id'];
 $TipoIdentificacionCollectorObj = new TipoIdentificacionCollector();
 $TipoIdentificacionCollectorObj->deleteTipoIdentificacion($id);
?>
<html>
   <head>
   <h3>Eliminacion ok</h3>
   </head>
   <body>
      <form action="TipoIdentificacion_list.php" method="Post">
         <div>
         <input type="submit" name="Regresar al inicio" value="Retornar">
         </div>

      </form>


   </body>

</html>
