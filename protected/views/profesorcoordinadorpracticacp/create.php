<?php
/* @var $this ProfesorcoordinadorpracticacpController */
/* @var $model Profesorcoordinadorpracticacp */

$this->breadcrumbs=array(
	'Profesor Coordinador de Practicas CP'=>array('index'),
	'Añadir',
);

$this->menu=array(
	array('label'=>'Lista de Profesores Coordinadores de Practicas CP', 'url'=>array('index')),
	array('label'=>'Administrar Profesor Coordinador de Practicas CP', 'url'=>array('admin')),
);
?>

<h1>Añadir Profesor Coordinador de Practicas CP</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>