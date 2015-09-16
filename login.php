<?php
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8"/>
 <title>LOGIN</title>
</head>
<body>
<?php
 if(isset($_POST['txtUsuario'])){
  $_SESSION['txtUsuario'] = $_POST['txtUsuario'];
  echo "Bienvenido! Has iniciado sesion: ".$_POST['txtUsuario'];
 }else{
  if(isset($_SESSION['txtUsuario'])){
  echo "Has iniciado Sesion: ".$_SESSION['txtUsuario'];
 }else{
  echo "Acceso Restringido";
 }
 }
?>
<br /><a href="index.php">[REGRESAR]</a>
</body>
</html>



