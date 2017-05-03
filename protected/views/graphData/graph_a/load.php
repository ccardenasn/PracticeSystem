<?php

$base = Yii::app()->baseUrl; 
$js = Yii::app()->getClientScript();
$js->registerScriptFile($base.'/graphProcess/Highcharts/code/highcharts.js');
$js->registerScriptFile($base.'/graphProcess/Highcharts/code/modules/exporting.js');
$js->registerScriptFile($base.'/graphProcess/Highcharts/code/lib/canvg.js');
//$js->registerScriptFile($base.'/graphProcess/Highcharts/code/modules/canvas-tools.js');
$js->registerScriptFile($base.'/graphProcess/Highcharts/code/modules/canvas-tools.src.js');
//$js->registerScriptFile($base.'/graphProcess/yii-highcharts/highcharts/assets/modules/canvg.js');
//$js->registerScriptFile($base.'/graphProcess/yii-highcharts/highcharts/assets/modules/canvas-tools.js');
$js->registerScriptFile($base.'/graphProcess/export-csv-master/export-csv.js');
//$js->registerScriptFile($base.'/graphProcess/Highcharts/code/lib/jsPDF-1.3.2/jspdf.js');
$js->registerScriptFile($base.'/graphProcess/Highcharts/code/highcharts-export-clientside-master/highcharts-export-clientside.js');
//$js->registerScriptFile($base.'/graphProcess/Highcharts/code/modules/offline-exporting.js');
//$js->registerScriptFile($base.'/graphProcess/yii-highcharts/offline-exporting.js');
$js->registerScriptFile($base.'/graphProcess/grafico_a/loadGraph_a.js');

?>

<?php
$data=CHtml::listData(Centropractica::model()->findAll(),'RBD','NombreCentroPractica','RBD');
?>

<div class="row">
<?php echo CHtml::label('<b>Seleccione Un Centro</b>','centerLabel');?>
</div>

<div class="row">
<?php echo CHtml::dropDownList('dynamic_data','RBD',$data,array('id'=>'dynamic_data'));?>
</div>

<div id="graphcontainer" style="width: 90%; float:left;"></div>

<table class="maintable" bgcolor="#F0F0F0">
</table>