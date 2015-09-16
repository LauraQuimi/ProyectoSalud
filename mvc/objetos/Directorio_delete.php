<?php
 include_once('DirectorioCollector.php');
 include_once('Directorio.php');
 $id = $_GET['id']; 
 $DirectorioCollectorObj = new DirectorioCollector();
 $DirectorioCollectorObj->deleteDirectorio($id);

?>
<html>
   <head>
   <h3>Eliminacion ok</h3>
   </head>
   <body>
      <form action="Directorio_list.php" method="Post">
         <div>
         <input type="submit" name="Regresar al inicio" value="Retornar">
         </div>

      </form>


   </body>

</html>
