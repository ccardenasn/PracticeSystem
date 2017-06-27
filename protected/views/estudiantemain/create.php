<?php
/* @var $this EstudiantemainController */
/* @var $model Estudiantemain */

$this->breadcrumbs=array(
	'Estudiantemains'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Estudiantemain', 'url'=>array('index')),
	array('label'=>'Manage Estudiantemain', 'url'=>array('admin')),
);
?>

<h1>Create Estudiantemain</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>