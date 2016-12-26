<?php
/* @var $this DocenteresponsablepracticaController */
/* @var $model Docenteresponsablepractica */

$this->breadcrumbs=array(
	'Docentes Responsables de Practicas'=>array('index'),
	'Añadir',
);

$this->menu=array(
	array('label'=>'Lista de Docentes Responsables de Practicas', 'url'=>array('index')),
	array('label'=>'Administrar Docentes Responsables de Practicas', 'url'=>array('admin')),
);
?>

<h1>Añadir Docente Responsable de Practicas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>