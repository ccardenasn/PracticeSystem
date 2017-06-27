<?php
/* @var $this EstudianteloginController */
/* @var $model Estudiantelogin */

$this->breadcrumbs=array(
	'Estudiantelogins'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Estudiantelogin', 'url'=>array('index')),
	array('label'=>'Manage Estudiantelogin', 'url'=>array('admin')),
);
?>

<h1>Create Estudiantelogin</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>