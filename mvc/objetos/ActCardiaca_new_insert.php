<?php
 include_once('ActCardiaca.php');
 include_once('ActCardiacaCollector.php');
 $ActCardiacaCollectorObj = new ActCardiacaCollector();
 $max = $ActCardiacaCollectorObj->selectMax();
 $max=($max+1);
print_r($max);
?>
<!DOCTYPE html>
 <html lang="es">
  <head>
   <meta charset ="utf-8">
   <title> Insertar nueva ActCardiaca</title>
   <h1>Insertar Actividades Cardiacas</h1>
  
</head>
  <body>
   <?php //echo $max; ?>
    <form action ="ActCardiaca_insert.php" method ="post">
     <fieldset>
	<div>
         <label> ID </label>
         <input type="text" name= "ID" value = "<?php echo $max; ?>"/> </br>
	</div>
	<div>
	  <label> Usuario</label>
          <input type="number" name= "id_usuario" value = ""/> </br>
        </div>
        <div>
	  <label> Fecha</label>
          <input type="date" name= "fecha_hora" value = "<?php echo date("Y-m-d");?>"/> </br>
        </div>
         <div>
	  <label> Pulso</label>
          <input type="text" name= "pulso" value = ""/></br>
        </div>
	<div>
           <input type="submit" name="btnGuardar" value="Guardar">
           <input type="submit" name="cancelar" value="Cancelar" />
        </div>
     </fieldset>
    </form> 
  </body>
 </html>
