<?php
 //$id=1;
 $id = $_GET['id'];
 include_once('Demo.php');
 include_once('DemoCollector.php');
 $DemoCollectorObj = new DemoCollector();
 $ObjDemo = $DemoCollectorObj->showDemo($id);
 //print_r($ObjDemo);
?>
<!DOCTYPE html>
 <html lang="es">
  <head>
   <meta charset ="utf-8">
   <title> Editar User </title>
  </head>
  <body>
    <form action ="actualizar_demo.php" method ="post">
     <fieldset>
      <label> ID </label>
      <input type="text" name= "ID" value = "<?php echo $ObjDemo->getIdDemo(); ?>" /> </br>
      <label> Nombre</label>
      <input type="text" name= "Nombre" value = "<?php echo $ObjDemo->getNombre(); ?>"/> </br>
      <label> Apellido</label>
      <input type="text" name= "Apellido" value = "<?php echo $ObjDemo->getApellido(); ?>"/></br>
      <button type = "submit"> ACEPTAR </button>
      <button><a href = "demo_list.php">CANCELAR</a> </button>
     </fieldset>
    </form> 
  </body>
 </html>
