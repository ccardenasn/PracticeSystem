<?php
/* @var $this UniversidadrepController */
/* @var $model Universidadrep */

$this->breadcrumbs=array(
	'Universidadreps'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Universidadrep', 'url'=>array('index')),
	array('label'=>'Manage Universidadrep', 'url'=>array('admin')),
);
?>

<h1>Create Universidadrep</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>