<?php
/* @var $this SemestremainController */
/* @var $model Semestremain */

$this->breadcrumbs=array(
	'Semestremains'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Semestremain', 'url'=>array('index')),
	array('label'=>'Manage Semestremain', 'url'=>array('admin')),
);
?>

<h1>Create Semestremain</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>