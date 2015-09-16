<?php
 include_once('ActCardiacaCollector.php');
//clude_once('Collector.php');
 //$id = $_POST['ID'];
 $id_usuario = $_POST['id_usuario'];
 $fecha_hora = $_POST['fecha_hora'];
 $pulso = $_POST['pulso'];
 $ActCardiacaCollectorObj = new ActCardiacaCollector();
 $ActCardiacaCollectorObj->insertActCardiaca($id_usuario, $fecha_hora, $pulso);
?>
<html>
   <head>
   <h3>Insercion ok</h3>
   </head>
   <body>
      <form action="ActCardiaca_list.php" method="Post">
         <div>
         <input type="submit" name="Regresar al inicio" value="Retornar">
         </div>

      </form>


   </body>

</html>
