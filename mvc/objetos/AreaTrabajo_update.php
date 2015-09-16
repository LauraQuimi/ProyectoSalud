<?php
session_start();
 include_once('AreaTrabajoCollector.php');
 include_once('AreaTrabajo.php');
 $id = $_POST['id'];
 $descripcion = $_POST['descripcion'];
 $AreaTrabajoCollectorObj = new AreaTrabajoCollector();
 $AreaTrabajoCollectorObj->updateAreaTrabajo($id, $descripcion);

?>
<html>
   <head>
   <h3>Actualizacion ok</h3>
   </head>
   <body>
      <form action="AreaTrabajo_list.php" method="Post">
         <div>
         <input type="submit" name="Regresar al inicio" value="Retornar">
         </div>

      </form>


   </body>

</html>
