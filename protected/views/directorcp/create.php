<?php
/* @var $this DirectorcpController */
/* @var $model Directorcp */

$this->breadcrumbs=array(
	'Director CP'=>array('index'),
	'Añadir',
);

$this->menu=array(
	array('label'=>'Lista de Directores CP', 'url'=>array('index')),
	array('label'=>'Administrar Directores CP', 'url'=>array('admin')),
);
?>

<h1>Añadir Director CP</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>