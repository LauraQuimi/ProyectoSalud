<?php
session_start();
 include_once('TipoInstitucionCollector.php');
 include_once('TipoInstitucion.php');
 $id = $_GET['id'];
 $TipoInstitucionCollectorObj = new TipoInstitucionCollector();
 $TipoInstitucionCollectorObj->deleteTipoInstitucion($id);
?>
<html>
   <head>
   <h3>Eliminacion ok</h3>
   </head>
   <body>
      <form action="TipoInstitucion_list.php" method="Post">
         <div>
         <input type="submit" name="Regresar al inicio" value="Retornar">
         </div>

      </form>


   </body>

</html>
