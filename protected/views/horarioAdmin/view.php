<?php
/* @var $this HorarioadminController */
/* @var $model Horarioadmin */

$this->breadcrumbs=array(
	'Horarioadmins'=>array('index'),
	$model->CodHorario,
);

$this->menu=array(
	array('label'=>'List Horarioadmin', 'url'=>array('index')),
	array('label'=>'Create Horarioadmin', 'url'=>array('create')),
	array('label'=>'Update Horarioadmin', 'url'=>array('update', 'id'=>$model->CodHorario)),
	array('label'=>'Delete Horarioadmin', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CodHorario),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Horarioadmin', 'url'=>array('admin')),
);
?>

<h1>View Horarioadmin #<?php echo $model->CodHorario; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'CodHorario',
		'Estudiante_RutEstudiante',
	),
)); ?>
