<?php
/* @var $this EstudianteresponsableController */
/* @var $model Estudianteresponsable */

$this->breadcrumbs=array(
	'Estudianteresponsables'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Estudianteresponsable', 'url'=>array('index')),
	array('label'=>'Manage Estudianteresponsable', 'url'=>array('admin')),
);
?>

<h1>Create Estudianteresponsable</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>