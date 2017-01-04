<?php
/* @var $this SemestreController */
/* @var $model Semestre */

$this->breadcrumbs=array(
	'Semestres'=>array('index'),
	$model->CodSemestre,
);

$this->menu=array(
	array('label'=>'List Semestre', 'url'=>array('index')),
	array('label'=>'Create Semestre', 'url'=>array('create')),
	array('label'=>'Update Semestre', 'url'=>array('update', 'id'=>$model->CodSemestre)),
	array('label'=>'Delete Semestre', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CodSemestre),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Semestre', 'url'=>array('admin')),
);
?>

<h1>View Semestre #<?php echo $model->CodSemestre; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'CodSemestre',
		'NombreSemestre',
	),
)); ?>
