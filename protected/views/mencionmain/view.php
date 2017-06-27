<?php
/* @var $this MencionmainController */
/* @var $model Mencionmain */

$this->breadcrumbs=array(
	'Mencionmains'=>array('index'),
	$model->CodMencion,
);

$this->menu=array(
	array('label'=>'List Mencionmain', 'url'=>array('index')),
	array('label'=>'Create Mencionmain', 'url'=>array('create')),
	array('label'=>'Update Mencionmain', 'url'=>array('update', 'id'=>$model->CodMencion)),
	array('label'=>'Delete Mencionmain', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CodMencion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Mencionmain', 'url'=>array('admin')),
);
?>

<h1>View Mencionmain #<?php echo $model->CodMencion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'CodMencion',
		'NombreMencion',
	),
)); ?>
