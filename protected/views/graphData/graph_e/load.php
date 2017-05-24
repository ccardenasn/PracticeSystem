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
$js->registerScriptFile($base.'/graphProcess/grafico_e/loadGraph_e.js');
?>
	
<script>
var actionURL = '<?php echo Yii::app()->createUrl('GraphData/exportImage'); ?>';
var actionText = '<?php echo Yii::app()->createUrl('GraphData/exportText'); ?>';
var actionPDF = '<?php echo Yii::app()->createUrl('GraphData/pdf'); ?>';
</script>

<div class="row">
	<?php echo CHtml::label('<b>Seleccionar</b>','centerLabel');?>
</div>

<div class="row">
	<select id="dynamic_data">
	<?php 
	include('connect.php');
	include('ForceUTF/Encoding.php');
	$sqlb = "select NombrePractica from configuracionpractica inner join planificacionclase on configuracionpractica.NombrePractica = planificacionclase.ConfiguracionPractica_NombrePractica group by NombrePractica;";
		
	$st = mysql_query($sqlb,$con);
	
	$i=0;
	while($rows = mysql_fetch_array($st))
	{
		echo'<option value="'.$i.'">'.Encoding::toUTF8($rows['NombrePractica']).'</option>';
		$i++;
	}
	?>
</select>
	<input type="button" name="btnSaveChart" id="btnSaveChart" value="Crear PDF" onclick="javascript:saveChartHTML();" >
</div>

<div id="graphcontainer" style="width: 90%; float:left;"></div>

<table class="maintable" bgcolor="#F0F0F0">
</table>