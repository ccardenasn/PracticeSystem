<?php

$base = Yii::app()->baseUrl; 
$js = Yii::app()->getClientScript();
$js->registerScriptFile($base.'/graphProcess/yii-highcharts/highcharts/assets/highcharts.js');
$js->registerScriptFile($base.'/graphProcess/yii-highcharts/highcharts/assets/modules/exporting.js');
$js->registerScriptFile($base.'/graphProcess/grafico_f/loadGraph_f.js');
?>

<div id="graphcontainer" style="width: 90%; float:left;"></div>

<table class="maintable" bgcolor="#F0F0F0">
</table>