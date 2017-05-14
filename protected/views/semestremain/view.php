<?php
/* @var $this SemestremainController */
/* @var $model Semestremain */

$this->breadcrumbs=array(
	'Semestremains'=>array('index'),
	$model->CodSemestre,
);

$this->menu=array(
	array('label'=>'List Semestremain', 'url'=>array('index')),
	array('label'=>'Create Semestremain', 'url'=>array('create')),
	array('label'=>'Update Semestremain', 'url'=>array('update', 'id'=>$model->CodSemestre)),
	array('label'=>'Delete Semestremain', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CodSemestre),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Semestremain', 'url'=>array('admin')),
);
?>

<h1>View Semestremain #<?php echo $model->CodSemestre; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'CodSemestre',
		'NombreSemestre',
	),
)); ?>
