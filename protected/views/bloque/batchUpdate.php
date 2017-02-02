<?php
/* @var $this BloqueController */
/* @var $model Bloque */

$this->breadcrumbs=array(
	'Bloques'=>array('index'),
	'Configuración de Bloques',
);

$this->menu=array(
	array('label'=>'List Bloque', 'url'=>array('index')),
	array('label'=>'Create Bloque', 'url'=>array('create')),
	array('label'=>'View Bloque', 'url'=>array('view')),
	array('label'=>'Manage Bloque', 'url'=>array('admin')),
);
?>

<h1>Configuración de Bloques</h1>

<?php $this->renderPartial('batchUpdateForm', array('items'=>$items)); ?>