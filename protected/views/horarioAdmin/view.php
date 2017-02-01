<?php
/* @var $this HorarioAdminController */
/* @var $model HorarioAdmin */

$this->breadcrumbs=array(
	'Horario Admins'=>array('index'),
	$model->CodHorario,
);

$this->menu=array(
	array('label'=>'List HorarioAdmin', 'url'=>array('index')),
	array('label'=>'Create HorarioAdmin', 'url'=>array('create')),
	array('label'=>'Update HorarioAdmin', 'url'=>array('update', 'id'=>$model->CodHorario)),
	array('label'=>'Delete HorarioAdmin', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CodHorario),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage HorarioAdmin', 'url'=>array('admin')),
);
?>

<h1>View HorarioAdmin #<?php echo $model->CodHorario; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'CodHorario',
		'Estudiante_RutEstudiante',
		'tablaHorario',
	),
)); ?>
