<?php
$base = Yii::app()->baseUrl; 
$js = Yii::app()->getClientScript();
$js->registerScriptFile($base.'/graphProcess/yii-highcharts/highcharts/assets/highcharts.js');
$js->registerScriptFile($base.'/graphProcess/yii-highcharts/highcharts/assets/modules/exporting.js');
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