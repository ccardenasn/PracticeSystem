<?php
/* @var $this CarreraController */
/* @var $model Carrera */

$this->breadcrumbs=array(
	'Carreras'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista Carreras', 'url'=>array('index')),
	array('label'=>'Administrar Carreras', 'url'=>array('admin')),
);
?>

<h1>Añadir Carrera</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>