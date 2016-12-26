<?php
/* @var $this SecretariacpController */
/* @var $model Secretariacp */

$this->breadcrumbs=array(
	'Secretaria CP'=>array('index'),
	'Añadir',
);

$this->menu=array(
	array('label'=>'Lista de Secretarias CP', 'url'=>array('index')),
	array('label'=>'Administrar Secretarias CP', 'url'=>array('admin')),
);
?>

<h1>Añadir Secretaria CP</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>