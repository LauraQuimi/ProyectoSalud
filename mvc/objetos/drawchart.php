
<HTML>
<BODY>

<meta charset="utf-8"> 
<META HTTP-EQUIV="REFRESH" CONTENT="3;URL=drawchart.php">
<?php
require_once("actividadCollector.php");
require_once("notificacionCollector.php");
require_once("contactoCollector.php");
$id_usuario=2;
$actividadCollectorObj = new actividadCollector();
//insertamos un valor aleatorio
$pulso = rand(0, 1);
$fecha = '2015-09-15';
$actividadCollectorObj->insertActividad($pulso, $id_usuario);

$valoresArray;
$timeArray;

$i=0;
foreach ($actividadCollectorObj->showActividadxUsuario($id_usuario) as $c){

     
     $valoresArray[$i]= $c->getPulso();
     $time= $rawdata[$i]= $c->getFecha_hora();
     //echo $time;
     $date = new DateTime($time);
    //ALMACENAMOS EL TIMESTAMP EN EL ARRAY
     $timeArray[$i] = $date->getTimestamp()*1000;
     $i++;
}

if($actividadCollectorObj->scanearActividad($id_usuario) > 25){
    echo " PULSO ACELERADO";
    $contactoCollectorObj = new contactoCollector();
    foreach ($contactoCollectorObj->showContactosxUsuario($id_usuario) as $c){
        $notificacionCollectorObj = new notificacionCollector();
        $notificacionCollectorObj->InsertNotificacion("PULSO ACELERADO", $c->getIddirectorio(), 1);
    
}
        
}else{
}

?>
<div id="contenedor"></div>

<script src="https://code.jquery.com/jquery.js"></script>   
<script src="http://code.highcharts.com/stock/highstock.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<script>

chartCPU = new Highcharts.StockChart({
    chart: {
        renderTo: 'contenedor'
        //defaultSeriesType: 'spline'
        
    },
    rangeSelector : {
        enabled: false
    },
    title: {
        text: 'RITMO CARDIACO'
    },
    xAxis: {
        type: 'datetime'
        //tickPixelInterval: 150,
        //maxZoom: 20 * 1000
    },
    yAxis: {
        minPadding: 0.2,
        maxPadding: 0.2,
        title: {
            text: 'Pulsaciones',
            margin: 10
        }
    },
    series: [{
        name: 'Valor',
        data: (function() {
                // generate an array of random data
                var data = [];
                <?php
                    for($i = 0 ;$i<count($rawdata);$i++){
                ?>
                data.push([<?php echo $timeArray[$i];?>,<?php echo $valoresArray[$i];?>]);
                <?php } ?>
                return data;
            })()
    }],
    credits: {
            enabled: false
    }
});

</script>   
</BODY>

</html>
