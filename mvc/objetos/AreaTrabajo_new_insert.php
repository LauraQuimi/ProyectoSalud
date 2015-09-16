<?php
 include_once('AreaTrabajo.php');
 include_once('AreaTrabajoCollector.php');
 $AreaTrabajoCollectorObj = new AreaTrabajoCollector();
 $max = $AreaTrabajoCollectorObj->selectMax();
 $max=($max+1);
?>
<!DOCTYPE html>
 <html lang="es">
  <head>
   <meta charset ="utf-8">
   <title> Insertar nueva AreaTrabajo</title>
  </head>
  <body>
   <?php //echo $max; ?>
    <form action ="AreaTrabajo_insert.php" method ="post">
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
