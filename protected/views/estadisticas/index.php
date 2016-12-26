<?php
/* @var $this EstadisticasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Estadisticases',
);

$this->menu=array(
	array('label'=>'Create Estadisticas', 'url'=>array('create')),
	array('label'=>'Manage Estadisticas', 'url'=>array('admin')),
);
?>

<h1>Estadisticases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
