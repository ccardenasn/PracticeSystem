<?php
/* @var $this MencionmainController */
/* @var $model Mencionmain */

$this->breadcrumbs=array(
	'Mencionmains'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Mencionmain', 'url'=>array('index')),
	array('label'=>'Manage Mencionmain', 'url'=>array('admin')),
);
?>

<h1>Create Mencionmain</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>