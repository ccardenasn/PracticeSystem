<?php
/* @var $this ConfiguracionpracticaController */
/* @var $model Configuracionpractica */

$this->breadcrumbs=array(
	'Configuracion de Practicas'=>array('index'),
	'Añadir',
);

$this->menu=array(
	array('label'=>'Lista de Prácticas', 'url'=>array('index')),
	array('label'=>'Administrar Prácticas', 'url'=>array('admin')),
);
?>

<h1>Añadir Práctica</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>