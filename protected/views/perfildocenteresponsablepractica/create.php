<?php
/* @var $this PerfildocenteresponsablepracticaController */
/* @var $model Perfildocenteresponsablepractica */

$this->breadcrumbs=array(
	'Perfildocenteresponsablepracticas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Perfildocenteresponsablepractica', 'url'=>array('index')),
	array('label'=>'Manage Perfildocenteresponsablepractica', 'url'=>array('admin')),
);
?>

<h1>Create Perfildocenteresponsablepractica</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>