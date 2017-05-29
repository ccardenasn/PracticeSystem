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
$js->registerScriptFile($base.'/graphProcess/grafico_c/loadGraph_c.js');
?>

<script>
var actionURL = '<?php echo Yii::app()->createUrl('graphdata/exportImage'); ?>';
var actionText = '<?php echo Yii::app()->createUrl('graphdata/exportText'); ?>';
var actionPDF = '<?php echo Yii::app()->createUrl('graphdata/pdf'); ?>';
</script>

<div class="row">
<?php echo CHtml::label('<b>Seleccionar</b>','centerLabel');?>
</div>

<div class="row">
	<select id="dynamic_data">
	<?php 
	include('connect.php');
	include('ForceUTF/Encoding.php');
	$sqlb = "select RBD,NombreCentroPractica from ((((centropractica inner join estudiante on centropractica.RBD = estudiante.CentroPractica_RBD) inner join planificacionclase on estudiante.RutEstudiante = planificacionclase.Estudiante_RutEstudiante) inner join bitacorasesion on planificacionclase.CodPlanificacion = bitacorasesion.PlanificacionClase_CodPlanificacion) inner join clasebitacorasesion on bitacorasesion.CodBitacora = clasebitacorasesion.BitacoraSesion_CodBitacora) group by RBD;";
		
	$st = mysql_query($sqlb,$con);
	
	while($rows = mysql_fetch_array($st))
	{
		echo'<option value="'.$rows['RBD'].'">'.Encoding::toUTF8($rows['NombreCentroPractica']).'</option>';
	}
	?>
    </select>
	<input type="button" name="btnSaveChart" id="btnSaveChart" value="Crear PDF" onclick="javascript:saveChartHTML();" >
</div>

<div id="graphcontainer" style="width: 90%; float:left;"></div>

<table class="maintable" bgcolor="#F0F0F0">
</table>