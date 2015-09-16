<?php
 include_once('ActCardiacaCollector.php');
 include_once('ActCardiaca.php');
 $id = $_GET['id']; 
 $ActCardiacaCollectorObj = new ActCardiacaCollector();
 $ActCardiacaCollectorObj->deleteActCardiaca($id);

?>
<html>
   <head>
   <h3>Eliminacion ok</h3>
   </head>
   <body>
      <form action="ActCardiaca_list.php" method="Post">
         <div>
         <input type="submit" name="Regresar al inicio" value="Retornar">
         </div>

      </form>


   </body>

</html>
