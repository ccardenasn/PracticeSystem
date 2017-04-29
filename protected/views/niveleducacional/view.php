<?php
/* @var $this NiveleducacionalController */
/* @var $model Niveleducacional */

$this->breadcrumbs=array(
	'Niveleducacionals'=>array('index'),
	$model->CodNivel,
);

$this->menu=array(
	array('label'=>'List Niveleducacional', 'url'=>array('index')),
	array('label'=>'Create Niveleducacional', 'url'=>array('create')),
	array('label'=>'Update Niveleducacional', 'url'=>array('update', 'id'=>$model->CodNivel)),
	array('label'=>'Delete Niveleducacional', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CodNivel),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Niveleducacional', 'url'=>array('admin')),
);
?>

<h1>View Niveleducacional #<?php echo $model->CodNivel; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'CodNivel',
		'NombreNivel',
	),
)); ?>
