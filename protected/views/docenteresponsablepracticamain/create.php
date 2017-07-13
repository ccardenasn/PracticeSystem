<?php
/* @var $this DocenteresponsablepracticamainController */
/* @var $model Docenteresponsablepracticamain */

$this->breadcrumbs=array(
	'Docenteresponsablepracticamains'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Docenteresponsablepracticamain', 'url'=>array('index')),
	array('label'=>'Manage Docenteresponsablepracticamain', 'url'=>array('admin')),
);
?>

<h1>Create Docenteresponsablepracticamain</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>