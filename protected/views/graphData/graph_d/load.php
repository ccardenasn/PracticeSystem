<?php

$base = Yii::app()->baseUrl; 
$js = Yii::app()->getClientScript();
$js->registerScriptFile($base.'/graphProcess/yii-highcharts/highcharts/assets/highcharts.js');
$js->registerScriptFile($base.'/graphProcess/yii-highcharts/highcharts/assets/modules/exporting.js');
$js->registerScriptFile($base.'/graphProcess/grafico_d/loadGraph_d.js');
?>

<?php
$data=array('1'=>'Centros','2'=>'Dependencias');
$select=key($data);
?>

<div class="row">
<?php echo CHtml::label('<b>Seleccione Una Opción</b>','optionLabel');?>
</div>

<div class="row">
<?php echo CHtml::dropDownList('dynamic_data',$select,$data,array('id'=>'dynamic_data'));?>
</div>

<div id="graphcontainer" style="width: 90%; float:left;"></div>
<table class="maintable" bgcolor="#F0F0F0">
</table>