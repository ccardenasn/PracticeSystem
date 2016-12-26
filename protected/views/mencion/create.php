<?php
/* @var $this MencionController */
/* @var $model Mencion */

$this->breadcrumbs=array(
	'Menciones'=>array('index'),
	'Añadir',
);

$this->menu=array(
	array('label'=>'Lista de Menciones', 'url'=>array('index')),
	array('label'=>'Administrar Menciones', 'url'=>array('admin')),
);
?>

<h1>Añadir Mencion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>