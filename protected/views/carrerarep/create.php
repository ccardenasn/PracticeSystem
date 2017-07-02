<?php
/* @var $this CarrerarepController */
/* @var $model Carrerarep */

$this->breadcrumbs=array(
	'Carrerareps'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Carrerarep', 'url'=>array('index')),
	array('label'=>'Manage Carrerarep', 'url'=>array('admin')),
);
?>

<h1>Create Carrerarep</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>