<?php
 include_once('AreaTrabajoCollector.php');
 //$id = $_POST['ID'];
 $descripcion = $_POST['descripcion'];
 $AreaTrabajoCollectorObj = new AreaTrabajoCollector();
 $AreaTrabajoCollectorObj->insertAreaTrabajo($descripcion);

?>
<html>
   <head>
   <h3>Insercion ok</h3>
   </head>
   <body>
      <form action="AreaTrabajo_list.php" method="Post">
         <div>
         <input type="submit" name="Regresar al inicio" value="Retornar">
         </div>

      </form>


   </body>

</html>
