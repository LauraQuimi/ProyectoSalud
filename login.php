<?php
session_start();
$usuario = $_POST["txtUsuario"];
$password = $_POST["txtPassword"];
include_once("mvc/objetos/loginCollector.php");
$loginCollectorObj = new loginCollector();

$objeto = $loginCollectorObj->ingreso($usuario, $password);
$res = $objeto['comprobador'];
$identificador = $objeto['identificador'];
/*var_dump($usuario);
var_dump($password);
$res = true;
$identificador = 1;*/

if($res === true){
    $_SESSION["newsession"] = $identificador;
    echo $_SESSION["newsession"];
    header('Location: index.php');
    //return $identificador;
}else{
    print '<script language="JavaScript">'; 
    print 'alert("Error, usuario o contraseña incorrectos");'; 
    print '</script>';
    header('Location: index.php');
    //return $identificador;
}
?>