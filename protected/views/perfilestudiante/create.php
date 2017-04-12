<?php
/* @var $this PerfilestudianteController */
/* @var $model Perfilestudiante */

$this->breadcrumbs=array(
	'Perfilestudiantes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Perfilestudiante', 'url'=>array('index')),
	array('label'=>'Manage Perfilestudiante', 'url'=>array('admin')),
);
?>

<h1>Create Perfilestudiante</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>