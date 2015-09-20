<?php
 include_once('TipoIdentificacion.php');
 include_once('TipoIdentificacionCollector.php');
 $TipoIdentificacionCollectorObj = new TipoIdentificacionCollector();
 $max = $TipoIdentificacionCollectorObj->selectMax();
 $max=($max+1);
?>
<!DOCTYPE html>
 <html lang="es">
  <head>
   <meta charset ="utf-8">
   <title> Insertar nueva TipoIdentificacion</title>
  </head>
  <body>
   <?php //echo $max; ?>
    <form action ="TipoIdentificacion_insert.php" method ="post">
     <fieldset>
	<div>
         <label> ID </label>
         <input type="text" name= "ID" value = "<?php echo $max; ?>" /> </br>
	</div>
	<div>
	  <label> Descripcion</label>
          <input type="text" name= "descripcion" value = ""/> </br>
        </div>
	<div>
           <input type="submit" name="btnGuardar" value="Guardar">
           <input type="submit" name="cancelar" value="Cancelar" />
        </div>
     </fieldset>
    </form> 
  </body>
 </html>
