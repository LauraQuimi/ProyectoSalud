<?php
session_start();
$usuario = $_POST["txtUsuario"];
$password = $_POST["txtPasword"];
include_once("loginCollector.php");
/*$loginCollectorObj = new loginCollector();

$objeto = $loginCollectorObj->ingreso($usuario, $password);
$res = $objeto['comprobador'];
$identificador = $objeto['identificador'];*/
$res = true;
$identificador = 1;
if($res === true){
    $_SESSION["newsession"] = $identificador;
    echo $_SESSION["newsession"];
    header('Location: ../../index.php');
    //return $identificador;
}else{
    print '<script language="JavaScript">'; 
    print 'alert("Error, usuario o contraseña incorrectos");'; 
    print '</script>';
    header('Location: ../../index.php');
    //return $identificador;
}
?>