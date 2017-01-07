<?php
/* @var $this EstadisticasController */
/* @var $model Estadisticas */

$this->breadcrumbs=array(
	'Estadisticases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Estadisticas', 'url'=>array('index')),
	array('label'=>'Manage Estadisticas', 'url'=>array('admin')),
);
?>

<h1>Create Estadisticas</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'myValue'=>$myValue)); ?>