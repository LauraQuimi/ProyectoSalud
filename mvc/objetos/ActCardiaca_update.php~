<?php
session_start();
 include_once('ActCardiacaCollector.php');
 include_once('ActCardiaca.php');
 $id = $_POST['id'];
 $id_usuario = $_POST['id_usuario'];
$fecha_hora = $_POST['fecha_hora'];
 $pulso = $_POST['pulso'];
echo $id;
echo $id_usuario;
echo $fecha_hora;
echo ('kk');
 $ActCardiacaCollectorObj = new ActCardiacaCollector();
 $ActCardiacaCollectorObj->updateActCardiaca($id, $id_usuario,$fecha_hora, $pulso);

?>
<html>
   <head>
   <h3>Actualizacion ok</h3>
   </head>
   <body>
      <form action="ActCardiaca_list.php" method="Post">
         <div>
         <input type="submit" name="Regresar al inicio" value="Retornar">
         </div>

      </form>


   </body>

</html>
