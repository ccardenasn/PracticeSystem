<?php
/* @var $this SecretariacarreraController */
/* @var $model Secretariacarrera */

$this->breadcrumbs=array(
	'Secretaria de Carrera'=>array('index'),
	'Añadir',
);

$this->menu=array(
	array('label'=>'Lista de Secretaria de Carrera', 'url'=>array('index')),
	array('label'=>'Administrar Secretarias de Carrera', 'url'=>array('admin')),
);
?>

<h1>Añadir Secretaria de Carrera</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>