<?php
/* @var $this ProfesorguiacpController */
/* @var $model Profesorguiacp */

$this->breadcrumbs=array(
	'Profesor Guia CP'=>array('index'),
	'Añadir',
);

$this->menu=array(
	array('label'=>'Lista de Profesores Guia CP', 'url'=>array('index')),
	array('label'=>'Administrar Profesor Guia CP', 'url'=>array('admin')),
);
?>

<h1>Añadir Profesor Guia CP</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>