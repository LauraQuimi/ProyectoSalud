<?php
session_start();
 include_once('TipoInstitucionCollector.php');
 include_once('TipoInstitucion.php');
 $id = $_POST['id'];
 $descripcion = $_POST['descripcion'];
 $TipoInstitucionCollectorObj = new TipoInstitucionCollector();
 $TipoInstitucionCollectorObj->updateTipoInstitucion($id, $descripcion);

?>
<html>
   <head>
   <h3>Actualizacion ok</h3>
   </head>
   <body>
      <form action="TipoInstitucion_list.php" method="Post">
         <div>
         <input type="submit" name="Regresar al inicio" value="Retornar">
         </div>

      </form>


   </body>

</html>
