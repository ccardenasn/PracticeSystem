<?php
/* @var $this DirectorcarreraloginController */
/* @var $model Directorcarreralogin */

$this->breadcrumbs=array(
	'Directorcarreralogins'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Directorcarreralogin', 'url'=>array('index')),
	array('label'=>'Manage Directorcarreralogin', 'url'=>array('admin')),
);
?>

<h1>Create Directorcarreralogin</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>