<?php
/* @var $this PlanificacionclaseresponsableController */
/* @var $model Planificacionclaseresponsable */

$this->breadcrumbs=array(
	'Planificacionclaseresponsables'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Planificacionclaseresponsable', 'url'=>array('index')),
	array('label'=>'Manage Planificacionclaseresponsable', 'url'=>array('admin')),
);
?>

<h1>Create Planificacionclaseresponsable</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>