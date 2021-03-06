<?php
$base = Yii::app()->baseUrl; 
$js = Yii::app()->getClientScript();
$js->registerScriptFile($base.'/graphProcess/Highcharts/code/highcharts.js');
$js->registerScriptFile($base.'/graphProcess/promise-7.0.4.min.js');
$js->registerScriptFile($base.'/graphProcess/promise-done-7.0.4.min.js');
$js->registerScriptFile($base.'/graphProcess/html2canvas.js');
//$js->registerScriptFile($base.'/graphProcess/canvas2image.js');
//$js->registerScriptFile($base.'/graphProcess/canvas2image.min.js');
//$js->registerScriptFile($base.'/graphProcess/base64.js');
//$js->registerScriptFile($base.'/graphProcess/html2canvas.svg.js');
$js->registerScriptFile($base.'/graphProcess/saveChartFunctions.js');
$js->registerScriptFile($base.'/graphProcess/grafico_a/loadGraph_a.js');
?>

<script>
var actionURL = '<?php echo Yii::app()->createUrl('graphdata/exportImage'); ?>';
var actionText = '<?php echo Yii::app()->createUrl('graphdata/exportText'); ?>';
var actionPDF = '<?php echo Yii::app()->createUrl('graphdata/pdf'); ?>';
</script>

<?php
$Criteria = new CDbCriteria;
$Criteria->select = 'RBD,NombreCentroPractica';
$Criteria->join = 'join estudiante on estudiante.CentroPractica_RBD = RBD';
$Criteria->group = 'RBD';
$data=CHtml::listData(Centropractica::model()->findAll($Criteria),'RBD','NombreCentroPractica','RBD');
?>

<div class="row">
	<?php echo CHtml::label('<b>Seleccionar</b>','centerLabel');?>
</div>

<div class="row">
	<?php echo CHtml::dropDownList('dynamic_data','RBD',$data,array('id'=>'dynamic_data'));?>
	<input type="button" name="btnSaveChart" id="btnSaveChart" value="Crear PDF" onclick="javascript:saveChartHTML();" >
</div>

<div id="graphcontainer" style="width: 90%; float:left;"></div>

<table class="maintable" bgcolor="#F0F0F0">
</table>
