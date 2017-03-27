<?php
/* @var $this ProfesorguiacpmainController */
/* @var $model Profesorguiacp */

$this->breadcrumbs=array(
	'Profesorguiacps'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Profesorguiacp', 'url'=>array('index')),
	array('label'=>'Manage Profesorguiacp', 'url'=>array('admin')),
);
?>

<h1>Create Profesorguiacp</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>