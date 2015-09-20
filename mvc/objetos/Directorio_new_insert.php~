<?php
 //include_once('Directorio.php');
 include_once('DirectorioCollector.php');
 $DirectorioCollectorObj = new DirectorioCollector();
 $max = $DirectorioCollectorObj->selectMax();
 $max=($max+1);
print_r($max);
?>
<!DOCTYPE html>
 <html lang="es">
  <head>
   <meta charset ="utf-8">
   <title> Insertar nueva Directorio</title>
   <h1>Insertar Directorio</h1>
  
</head>
  <body>
   <?php //echo $max; ?>
    <form action ="Directorio_insert.php" method ="post">
     <fieldset>
	<div>
         <label> ID </label>
         <input type="text" name= "ID" value = "<?php echo $max; ?>"/> </br>
	</div>
	<div>
	  <label> Nombre</label>
          <input type="text" name= "nombre_contacto" value = ""/></br>
        </div>
        <div>
	  <label> Apellido</label>
          <input type="text" name= "apellido_contacto" value = ""/> </br>
        </div>
        <div>
	      <label> Celular</label>
           <input type="text" name= "celular_contacto" value = ""/></br>
        </div>

	   <div>
	     <label> Email</label>
           <input type="email" name= "email_contacto" value = ""/> </br>
         </div>

	   <div>
	     <label> Usuario</label>
          <input type="text" name= "id_usuario" required value = ""/> </br>
        </div>
          <div>
	     <label> Tipo Relacion</label>
          <input type="text" name= "id_tipo_relacion" required value = ""/> </br>
        </div>


	<div>
           <input type="submit" name="btnGuardar" value="Guardar">
           <input type="submit" name="cancelar" value="Cancelar" />
        </div>
     </fieldset>
    </form> 
  </body>
 </html>
