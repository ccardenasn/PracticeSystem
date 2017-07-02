<?php
/* @var $this DocentecoordinadorpracticasloginController */
/* @var $model Docentecoordinadorpracticaslogin */

$this->breadcrumbs=array(
	'Docentecoordinadorpracticaslogins'=>array('index'),
	$model->RutCoordinador,
);

$this->menu=array(
	array('label'=>'List Docentecoordinadorpracticaslogin', 'url'=>array('index')),
	array('label'=>'Create Docentecoordinadorpracticaslogin', 'url'=>array('create')),
	array('label'=>'Update Docentecoordinadorpracticaslogin', 'url'=>array('update', 'id'=>$model->RutCoordinador)),
	array('label'=>'Delete Docentecoordinadorpracticaslogin', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RutCoordinador),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Docentecoordinadorpracticaslogin', 'url'=>array('admin')),
);
?>

<h1>View Docentecoordinadorpracticaslogin #<?php echo $model->RutCoordinador; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'RutCoordinador',
		'NombreCoordinador',
		'ClaveCoordinador',
		'MailCoordinador',
		'TelefonoCoordinador',
		'CelularCoordinador',
		'ImagenCoordinador',
	),
)); ?>
