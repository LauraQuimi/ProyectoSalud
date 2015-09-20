<?php
 include_once('TipoInstitucionCollector.php');
 //$id = $_POST['ID'];
 $descripcion = $_POST['descripcion'];
 $TipoInstitucionCollectorObj = new TipoInstitucionCollector();
 $TipoInstitucionCollectorObj->insertTipoInstitucion($descripcion);

?>
<html>
   <head>
   <h3>Insercion ok</h3>
   </head>
   <body>
      <form action="TipoInstitucion_list.php" method="Post">
         <div>
         <input type="submit" name="Regresar al inicio" value="Retornar">
         </div>

      </form>


   </body>

</html>
