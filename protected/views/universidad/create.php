<?php
/* @var $this UniversidadController */
/* @var $model Universidad */

$this->breadcrumbs=array(
	'Universidad'=>array('index'),
	'Añadir',
);

$this->menu=array(
	array('label'=>'Lista Universidad', 'url'=>array('index')),
	array('label'=>'Administrar Universidad', 'url'=>array('admin')),
);
?>

<h1>Añadir Universidad</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>