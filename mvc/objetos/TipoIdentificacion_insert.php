<?php
 include_once('TipoIdentificacionCollector.php');
 //$id = $_POST['ID'];
 $descripcion = $_POST['descripcion'];
 $TipoIdentificacionCollectorObj = new TipoIdentificacionCollector();
 $TipoIdentificacionCollectorObj->insertTipoIdentificacion($descripcion);

?>
<html>
   <head>
   <h3>Insercion ok</h3>
   </head>
   <body>
      <form action="TipoIdentificacion_list.php" method="Post">
         <div>
         <input type="submit" name="Regresar al inicio" value="Retornar">
         </div>

      </form>


   </body>

</html>
