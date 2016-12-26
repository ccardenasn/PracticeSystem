<?php
/* @var $this EstadisticasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Estadisticases',
);

?>

<h1>Estadisticases</h1>

<?php $this->widget('ext.yii-highcharts.highcharts.HighchartsWidget',array('options'=>$mainoptionsA)); ?>
