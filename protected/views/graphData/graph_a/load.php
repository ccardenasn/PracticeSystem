<?php

$base = Yii::app()->baseUrl; 
$js = Yii::app()->getClientScript();
$js->registerScriptFile($base.'/graphProcess/Highcharts/code/highcharts.js');
$js->registerScriptFile($base.'/graphProcess/Highcharts/code/modules/exporting.js');
$js->registerScriptFile($base.'/graphProcess/html2canvas.js');
$js->registerScriptFile($base.'/graphProcess/saveChartFunctions.js');
//$js->registerScriptFile($base.'/graphProcess/Highcharts/code/lib/canvg.js');
//$js->registerScriptFile($base.'/graphProcess/Highcharts/code/modules/canvas-tools.js');
//$js->registerScriptFile($base.'/graphProcess/Highcharts/code/modules/canvas-tools.src.js');
//$js->registerScriptFile($base.'/graphProcess/yii-highcharts/highcharts/assets/modules/canvg.js');
//$js->registerScriptFile($base.'/graphProcess/yii-highcharts/highcharts/assets/modules/canvas-tools.js');
//$js->registerScriptFile($base.'/graphProcess/export-csv-master/export-csv.js');
$js->registerScriptFile($base.'/graphProcess/Highcharts/code/lib/jsPDF-1.3.2/dist/jspdf.debug.js');
$js->registerScriptFile($base.'/graphProcess/Highcharts/code/lib/jsPDF-1.3.2/jspdf.min.js');
//$js->registerScriptFile($base.'/graphProcess/Highcharts/code/lib/jsPDF-1.3.2/plugins/from_html.js');
//$js->registerScriptFile($base.'/graphProcess/Highcharts/code/lib/jsPDF-1.3.2/plugins/standard_fonts_metrics.js');
//$js->registerScriptFile($base.'/graphProcess/Highcharts/code/lib/jsPDF-1.3.2/plugins/split_text_to_size.js');
$js->registerScriptFile($base.'/graphProcess/Highcharts/code/lib/jsPDF-1.3.2/jspdf.plugin.autotable.js');
$js->registerScriptFile($base.'/graphProcess/Highcharts/code/highcharts-export-clientside-master/highcharts-export-clientside.js');
//$js->registerScriptFile($base.'/graphProcess/Highcharts/code/modules/offline-exporting.js');
//$js->registerScriptFile($base.'/graphProcess/yii-highcharts/offline-exporting.js');
$js->registerScriptFile($base.'/graphProcess/grafico_a/loadGraph_a.js');

?>

<script>
var actionURL = '<?php echo Yii::app()->createUrl('GraphData/exportImage'); ?>';
var actionPDF = '<?php echo Yii::app()->createUrl('GraphData/pdf'); ?>';

</script>

<?php
$data=CHtml::listData(Centropractica::model()->findAll(),'RBD','NombreCentroPractica','RBD');
?>

<div class="row">
<?php echo CHtml::label('<b>Seleccione Un Centro</b>','centerLabel');?>
</div>

<div class="row">
<?php echo CHtml::dropDownList('dynamic_data','RBD',$data,array('id'=>'dynamic_data'));?>
</div>

<div id=btnSaveChart>
		<input type="button" name="btnSaveChart" id="btnSaveChart" value="Guardar imagen" onclick="javascript:saveChartHTML();" >
	</div>
<div id="renderData">
<div id="graphcontainer" style="width: 90%; float:left;"></div>

<table class="maintable" bgcolor="#F0F0F0">
</table>
</div>
