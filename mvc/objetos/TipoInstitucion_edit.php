<?php
 //$id=1;
 $id = $_GET['id'];
 include_once('TipoInstitucion.php');
 include_once('TipoInstitucionCollector.php');
 $TipoInstitucionCollectorObj = new TipoInstitucionCollector();
 $ObjTipoInstitucion = $TipoInstitucionCollectorObj->showTipoInstitucion($id);
 print_r($ObjTipoInstitucion);
?>
<!DOCTYPE html>
 <html lang="es">
  <head>
   <meta charset ="utf-8">
   <title> Editar TipoInstitucion </title>
  </head>
  <body>
    <form action ="TipoInstitucion_update.php" method ="post">
     <fieldset>
      <label> ID </label>
      <input type="text" name= "id" value = "<?php echo $ObjTipoInstitucion->getIdTipoInstitucion(); ?>" /> </br>
      <label> Descripcion</label>
      <input type="text" name= "descripcion" value = "<?php echo $ObjTipoInstitucion->getDescripcion(); ?>"/></br>

      <button type = "submit"> ACEPTAR </button>
      <button><a href = "TipoInstitucion_list.php">CANCELAR</a> </button>
     </fieldset>
    </form> 
  </body>
 </html>
