<?php
/* @var $this PlanificacionclasemainController */
/* @var $model Planificacionclasemain */

$this->breadcrumbs=array(
	'Planificacionclasemains'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Planificacionclasemain', 'url'=>array('index')),
	array('label'=>'Manage Planificacionclasemain', 'url'=>array('admin')),
);
?>

<h1>Create Planificacionclasemain</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>