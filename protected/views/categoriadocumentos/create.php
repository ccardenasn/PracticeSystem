<?php
/* @var $this CategoriadocumentosController */
/* @var $model Categoriadocumentos */

$this->breadcrumbs=array(
	'Categoriadocumentoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Categoriadocumentos', 'url'=>array('index')),
	array('label'=>'Manage Categoriadocumentos', 'url'=>array('admin')),
);
?>

<h1>Create Categoriadocumentos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>