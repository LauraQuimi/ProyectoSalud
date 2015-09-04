<?php
include_once("NotasCollector.php");
$NotasCollectorObj = new NotasCollector();
?>
<h1 style="width:100%; text-align:center;">Notas</h1>
<table style="width:100%; border:1px solid grey; border-radius:5px;">
    <thead style="background:">
        <tr>
            <th>ID-Notas</th>
            <th>Parcial</th>
            <th>Final</th>
            <th>Mejoramiento</th>
            <th>Nota Final</th>
            <th rowspan="2">Opciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($NotasCollectorObj->showNotas() as $c){
                echo "<tr><td>".$c->getIdNotas()."</td>";
                echo "<td>" .$c->getParcial()."</td>";
                echo "<td>" .$c->getNFinal()."</td>";
                echo "<td>" .$c->getMejoramiento()."</td>";
                echo "<td>" .$c->getPromedio()."</td>";
                echo "<td><a href='formNotas.php?ID=".$c->getIdNotas()."'>Editar</a></td>";
                echo "<td><a href='NotasDelete.php?ID".$c->getIdNotas().">Eliminar</a></td></tr>";
            }
        ?>
    </tbody>
</table>