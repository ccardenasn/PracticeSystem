<?php

$base = Yii::app()->baseUrl; 
$js = Yii::app()->getClientScript();
$js->registerScriptFile($base.'/graphProcess/Highcharts/code/highcharts.js');
$js->registerScriptFile($base.'/graphProcess/Highcharts/code/modules/exporting.js');
$js->registerScriptFile($base.'/graphProcess/html2canvas.js');
$js->registerScriptFile($base.'/graphProcess/saveChartFunctions.js');
$js->registerScriptFile($base.'/graphProcess/Highcharts/code/lib/jsPDF-1.3.2/dist/jspdf.debug.js');
$js->registerScriptFile($base.'/graphProcess/Highcharts/code/lib/jsPDF-1.3.2/jspdf.min.js');
$js->registerScriptFile($base.'/graphProcess/Highcharts/code/lib/jsPDF-1.3.2/jspdf.plugin.autotable.js');
$js->registerScriptFile($base.'/graphProcess/Highcharts/code/highcharts-export-clientside-master/highcharts-export-clientside.js');
$js->registerScriptFile($base.'/graphProcess/grafico_b/loadGraph_b.js');
?>

<script>
var actionURL = '<?php echo Yii::app()->createUrl('graphdata/exportImage'); ?>';
var actionText = '<?php echo Yii::app()->createUrl('graphdata/exportText'); ?>';
var actionPDF = '<?php echo Yii::app()->createUrl('graphdata/pdf'); ?>';
</script>

<?php
$data=CHtml::listData(Centropractica::model()->findAll(),'RBD','NombreCentroPractica','RBD');
?>

<div class="row">
<?php echo CHtml::label('<b>Seleccionar</b>','centerLabel');?>
</div>

<div class="row">
<?php echo CHtml::dropDownList('dynamic_data','RBD',$data,array('id'=>'dynamic_data'));?>
</div>

<div id="graphcontainer" style="width: 90%; float:left;"></div>

<table class="maintable" bgcolor="#F0F0F0">
</table>