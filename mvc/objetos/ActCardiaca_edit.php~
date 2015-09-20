<?php
 //$id=1;
 $id = $_GET['id'];
 include_once('ActCardiaca.php');
 include_once('ActCardiacaCollector.php');
 $ActCardiacaCollectorObj = new ActCardiacaCollector();
 $ObjActCardiaca = $ActCardiacaCollectorObj->showActCardiaca($id);
// print_r($ObjActCardiaca);
?>
<!DOCTYPE html>
 <html lang="es">
  <head>
   <meta charset ="utf-8">
   <title> Editar User </title>
  <h1>Actualizar Datos</h1>
  
</head>
  <body>
    <form action ="ActCardiaca_update.php" method ="post">
     <fieldset>
      <label> ID </label>
      <input type="text" name= "id" value = "<?php echo $ObjActCardiaca->getIdCardiaca(); ?>" /> </br>
      <label> Id Usuario</label>
      <input type="text" name= "id_usuario" value = "<?php echo $ObjActCardiaca->getIdUsuario(); ?>"/> </br>
      <label> Fecha Hora</label>
      <input type="text" name= "fecha_hora" value = "<?php echo $ObjActCardiaca->getFecha(); ?>"/></br>
<label> Pulso</label>
      <input type="text" name= "pulso" value = "<?php echo $ObjActCardiaca->getPulso(); ?>"/></br>
            
<button type = "submit"> Actualizar </button>
      <button><a href = "ActCardiaca_listar.php">Regresar</a> </button>
     </fieldset>
    </form> 
  </body>
 </html>
