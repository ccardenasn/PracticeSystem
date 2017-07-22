<?php
/* @var $this PlanificacionclasemainController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Planificacionclasemains',
);

$this->menu=array(
	array('label'=>'Create Planificacionclasemain', 'url'=>array('create')),
	array('label'=>'Manage Planificacionclasemain', 'url'=>array('admin')),
);
?>

<h1>Planificacionclasemains</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
