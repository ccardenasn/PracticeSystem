<?php
/* @var $this NiveleducacionalController */
/* @var $model Niveleducacional */

$this->breadcrumbs=array(
	'Niveleducacionals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Niveleducacional', 'url'=>array('index')),
	array('label'=>'Manage Niveleducacional', 'url'=>array('admin')),
);
?>

<h1>Create Niveleducacional</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>