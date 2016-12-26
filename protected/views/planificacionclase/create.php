<?php
/* @var $this PlanificacionclaseController */
/* @var $model Planificacionclase */

$this->breadcrumbs=array(
	'Planificaciones'=>array('index'),
	'Añadir',
);

$this->menu=array(
	array('label'=>'Lista de Planificaciones', 'url'=>array('index')),
	array('label'=>'Administrar Planificaciones', 'url'=>array('admin')),
);
?>

<h1>Añadir Planificacion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>