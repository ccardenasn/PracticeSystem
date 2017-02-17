<?php
/* @var $this CentropracticaController */
/* @var $model Centropractica */

$this->breadcrumbs=array(
	'Centro de Practica'=>array('index'),
	'Añadir',
);

$this->menu=array(
	array('label'=>'Lista de Centro de Practica', 'url'=>array('index')),
	array('label'=>'Administrar Centro de Practica', 'url'=>array('admin')),
);
?>

<h1>Añadir Centro de Practica</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>