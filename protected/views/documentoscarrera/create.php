<?php
/* @var $this DocumentoscarreraController */
/* @var $model Documentoscarrera */

$this->breadcrumbs=array(
	'Documentoscarreras'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Documentoscarrera', 'url'=>array('index')),
	array('label'=>'Manage Documentoscarrera', 'url'=>array('admin')),
);
?>

<h1>Create Documentoscarrera</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>