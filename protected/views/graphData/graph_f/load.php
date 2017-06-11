<?php
$base = Yii::app()->baseUrl; 
$js = Yii::app()->getClientScript();
$js->registerScriptFile($base.'/graphProcess/Highcharts/code/highcharts.js');
$js->registerScriptFile($base.'/graphProcess/html2canvas.js');
$js->registerScriptFile($base.'/graphProcess/saveChartFunctions.js');
$js->registerScriptFile($base.'/graphProcess/grafico_f/loadGraph_f.js');
?>

<script>
var actionURL = '<?php echo Yii::app()->createUrl('graphdata/exportImage'); ?>';
var actionText = '<?php echo Yii::app()->createUrl('graphdata/exportText'); ?>';
var actionPDF = '<?php echo Yii::app()->createUrl('graphdata/pdf'); ?>';
</script>

<div class="row">
	<select id="dynamic_data" style="display:none">
	<option value="1">1</option>
	</select>
	
	<input type="button" name="btnSaveChart" id="btnSaveChart" value="Crear PDF" onclick="javascript:saveChartHTML();" >
</div>

<div id="graphcontainer" style="width: 90%; float:left;"></div>

<table class="maintable" bgcolor="#F0F0F0">
</table>