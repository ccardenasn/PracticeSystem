<?php
/* @var $this DocentesupervisorpracticaController */
/* @var $model Docentesupervisorpractica */

$this->breadcrumbs=array(
	'Docente Supervisor de Practicas'=>array('index'),
	'Añadir',
);

$this->menu=array(
	array('label'=>'Lista de Supervisores', 'url'=>array('index')),
	array('label'=>'Administrar Supervisores', 'url'=>array('admin')),
);
?>

<h1>Añadir Supervisores</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>