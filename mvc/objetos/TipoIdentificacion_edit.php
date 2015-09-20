<?php
 //$id=1;
 $id = $_GET['id'];
 include_once('TipoIdentificacion.php');
 include_once('TipoIdentificacionCollector.php');
 $TipoIdentificacionCollectorObj = new TipoIdentificacionCollector();
 $ObjTipoIdentificacion = $TipoIdentificacionCollectorObj->showTipoIdentificacion($id);
 print_r($ObjTipoIdentificacion);
?>
<!DOCTYPE html>
 <html lang="es">
  <head>
   <meta charset ="utf-8">
   <title> Editar TipoIdentificacion </title>
  </head>
  <body>
    <form action ="TipoIdentificacion_update.php" method ="post">
     <fieldset>
      <label> ID </label>
      <input type="text" name= "id" value = "<?php echo $ObjTipoIdentificacion->getIdTipoIdentificacion(); ?>" /> </br>
      <label> Descripcion</label>
      <input type="text" name= "descripcion" value = "<?php echo $ObjTipoIdentificacion->getDescripcion(); ?>"/></br>

      <button type = "submit"> ACEPTAR </button>
      <button><a href = "TipoIdentificacion_list.php">CANCELAR</a> </button>
     </fieldset>
    </form> 
  </body>
 </html>
