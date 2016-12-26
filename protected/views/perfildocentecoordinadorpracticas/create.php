<?php
/* @var $this DocentecoordinadorpracticasController */
/* @var $model Docentecoordinadorpracticas */

$this->breadcrumbs=array(
	'Docente Coordinador de Practicas'=>array('index'),
	'Añadir',
);

$this->menu=array(
	array('label'=>'Lista de Docentes Coordinadores de Practicas', 'url'=>array('index')),
	array('label'=>'Administrar Docente Coordinador de Practicas', 'url'=>array('admin')),
);
?>

<h1>Añadir Docente Coordinador de Practicas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>