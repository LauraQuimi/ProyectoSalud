<?php
include_once('usuario.php');
include_once('Collector.php');

class loginCollector extends Collector{
    function ingreso($usuario, $password){
        $row = self::$db->getRow("SELECT * FROM usuario where username= ? ", array("{$usuario}"));
        $objUsuario = "";
        if(isset($row)){
            $pass = $row{'password'};
            if($pass === $password){
                $identificador = $row{'id_tipo_usuario'};
                $comprobador = true;
                $objUsuario = array('identificador'=>$identificador, 'comprobador'=>$comprobador);
            }else{
                $identificador = 0;
                $comprobador = false;
                $objUsuario = array('identificador'=>$identificador, 'comprobador'=>$comprobador);
            }
        }
        return $objUsuario;
    }
}
?>