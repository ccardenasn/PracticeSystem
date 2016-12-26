<?php
/* @var $this DirectorcarreraController */
/* @var $model Directorcarrera */

$this->breadcrumbs=array(
	'Director de Carrera'=>array('index'),
	'Añadir',
);

$this->menu=array(
	array('label'=>'Lista de Directores de Carrera', 'url'=>array('index')),
	array('label'=>'Administrar Directores de Carrera', 'url'=>array('admin')),
);
?>

<h1>Añadir Director de Carrera</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>