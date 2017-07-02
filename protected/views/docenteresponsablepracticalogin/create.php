<?php
/* @var $this DocenteresponsablepracticaloginController */
/* @var $model Docenteresponsablepracticalogin */

$this->breadcrumbs=array(
	'Docenteresponsablepracticalogins'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Docenteresponsablepracticalogin', 'url'=>array('index')),
	array('label'=>'Manage Docenteresponsablepracticalogin', 'url'=>array('admin')),
);
?>

<h1>Create Docenteresponsablepracticalogin</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>