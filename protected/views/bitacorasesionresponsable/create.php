<?php
/* @var $this BitacorasesionresponsableController */
/* @var $model Bitacorasesionresponsable */

$this->breadcrumbs=array(
	'Bitacorasesionresponsables'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Bitacorasesionresponsable', 'url'=>array('index')),
	array('label'=>'Manage Bitacorasesionresponsable', 'url'=>array('admin')),
);
?>

<h1>Create Bitacorasesionresponsable</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>