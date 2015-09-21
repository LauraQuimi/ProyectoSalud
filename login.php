<?php
session_start();
$usuario = $_POST["txtUsuario"];
$password = $_POST["txtPassword"];
include_once("mvc/objetos/loginCollector.php");
$loginCollectorObj = new loginCollector();

$objeto = $loginCollectorObj->ingreso($usuario, $password);
$res = $objeto['comprobador'];
$identificador = $objeto['identificador'];

if($res === true){
    $_SESSION["newsession"] = $identificador;
    //echo $_SESSION["newsession"];
    echo"<script language='javascript'>window.location='index.php'</script>;";
}else{
    print '<script language="JavaScript">'; 
    print 'alert("Error, usuario o contraseña incorrectos");'; 
    print '</script>';
    echo"<script language='javascript'>window.location='index.php'</script>;";
}
?>