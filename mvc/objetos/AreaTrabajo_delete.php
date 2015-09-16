<?php
session_start();
 include_once('AreaTrabajoCollector.php');
 include_once('AreaTrabajo.php');
 $id = $_GET['id'];
 $AreaTrabajoCollectorObj = new AreaTrabajoCollector();
 $AreaTrabajoCollectorObj->deleteAreaTrabajo($id);
?>
<html>
   <head>
   <h3>Eliminacion ok</h3>
   </head>
   <body>
      <form action="AreaTrabajo_list.php" method="Post">
         <div>
         <input type="submit" name="Regresar al inicio" value="Retornar">
         </div>

      </form>


   </body>

</html>
