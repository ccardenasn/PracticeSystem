<?php
/* @var $this EstudianteController */
/* @var $model Estudiante */

$this->breadcrumbs=array(
	'Estudiantes'=>array('index'),
	'Añadir',
);

$this->menu=array(
	array('label'=>'Lista de Estudiantes', 'url'=>array('index')),
	array('label'=>'Administrar Estudiante', 'url'=>array('admin')),
);
?>

<h1>Añadir Estudiante</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>