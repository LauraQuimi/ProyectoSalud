<?php
include_once("DemoCollector.php");
$DemoCollectorObj = new DemoCollector();
?>
<form action="confirmación" method="post">
    <div>
        <label>Nota parcial:</label><input type="text" name="txtNotaParcial">
    </div>
    <div>
        <label>Nota final:</label><input type="text" name="txtNotaFinal">
    </div>
    <div>
        <label>Mejoramiento:</label><input type="text" name="txtMejoramiento">
    </div>
    <div>
        <label>NotaPromedio:</label><input type="text" name="txtNotaPromedio">
    </div>
    <div>
        <input type="submit" name="btnGuardar" value="Guardar">
    </div>
</form>