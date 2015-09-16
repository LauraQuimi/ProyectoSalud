<?php
 //$id=1;
 $id = $_GET['id'];
 include_once('Directorio.php');
 include_once('DirectorioCollector.php');
 $DirectorioCollectorObj = new DirectorioCollector();
 $ObjDirectorio = $DirectorioCollectorObj->showDirectorio($id);
// print_r($ObjDirectorio);
?>
<!DOCTYPE html>
 <html lang="es">
  <head>
   <meta charset ="utf-8">
   <title> Editar User </title>
  <h1>Actualizar Datos</h1>
  
</head>
  <body>
    <form action ="Directorio_update.php" method ="post">
     <fieldset>
      <label> ID </label>
      <input type="text" name= "id" value = "<?php echo $ObjDirectorio->getIdDirectorio(); ?>" /> </br>
	<div>
	   <label> Nombre</label>
          <input type="text" name= "nombre_contacto" value = "<?php echo $ObjDirectorio->getnombre_contacto(); ?>"/></br>
        </div>
        <div>
	  <label> Apellido</label>
          <input type="text" name= "apellido_contacto" value = "<?php echo $ObjDirectorio->getapellido_contacto(); ?>"/> </br>
        </div>
        <div>
	      <label> Celular</label>
           <input type="text" name= "celular_contacto" value = "<?php echo $ObjDirectorio->getcelular_contacto(); ?>"/></br>
        </div>

	   <div>
	     <label> Email</label>
           <input type="email" name= "email_contacto" value = "<?php echo $ObjDirectorio->getemail_contacto(); ?>"/> </br>
         </div>

      <label> Id Usuario</label>
      <input type="text" name= "id_usuario" value = "<?php echo $ObjDirectorio->getIdUsuario(); ?>"/> </br>


      <label> Id Tipo Relacion</label>
      <input type="text" name= "id_tipo_relacion" value = "<?php echo $ObjDirectorio->getIdTipoRelacion(); ?>"/></br>

            
<button type = "submit"> Actualizar </button>
      <button><a href = "Directorio_listar.php">Regresar</a> </button>
     </fieldset>
    </form> 
  </body>
 </html>
