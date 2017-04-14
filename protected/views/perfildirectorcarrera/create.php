<?php
/* @var $this PerfildirectorcarreraController */
/* @var $model Perfildirectorcarrera */

$this->breadcrumbs=array(
	'Perfildirectorcarreras'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Perfildirectorcarrera', 'url'=>array('index')),
	array('label'=>'Manage Perfildirectorcarrera', 'url'=>array('admin')),
);
?>

<h1>Create Perfildirectorcarrera</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>