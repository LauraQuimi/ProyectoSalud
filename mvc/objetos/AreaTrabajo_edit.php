<?php
 //$id=1;
 $id = $_GET['id'];
 include_once('AreaTrabajo.php');
 include_once('AreaTrabajoCollector.php');
 $AreaTrabajoCollectorObj = new AreaTrabajoCollector();
 $ObjAreaTrabajo = $AreaTrabajoCollectorObj->showAreaTrabajo($id);
 print_r($ObjAreaTrabajo);
?>
<!DOCTYPE html>
 <html lang="es">
  <head>
   <meta charset ="utf-8">
   <title> Editar AreaTrabajo </title>
  </head>
  <body>
    <form action ="AreaTrabajo_update.php" method ="post">
     <fieldset>
      <label> ID </label>
      <input type="text" name= "id" value = "<?php echo $ObjAreaTrabajo->getIdAreaTrabajo(); ?>" /> </br>
      <label> Descripcion</label>
      <input type="text" name= "descripcion" value = "<?php echo $ObjAreaTrabajo->getDescripcion(); ?>"/></br>

      <button type = "submit"> ACEPTAR </button>
      <button><a href = "AreaTrabajo_list.php">CANCELAR</a> </button>
     </fieldset>
    </form> 
  </body>
 </html>
