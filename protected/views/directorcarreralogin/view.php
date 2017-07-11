<?php
/* @var $this DirectorcarreraloginController */
/* @var $model Directorcarreralogin */

$this->breadcrumbs=array(
	'Directorcarreralogins'=>array('index'),
	$model->RutDirector,
);

$this->menu=array(
	array('label'=>'List Directorcarreralogin', 'url'=>array('index')),
	array('label'=>'Create Directorcarreralogin', 'url'=>array('create')),
	array('label'=>'Update Directorcarreralogin', 'url'=>array('update', 'id'=>$model->RutDirector)),
	array('label'=>'Delete Directorcarreralogin', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RutDirector),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Directorcarreralogin', 'url'=>array('admin')),
);
?>

<h1>View Directorcarreralogin #<?php echo $model->RutDirector; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'RutDirector',
		'NombreDirector',
		'ClaveDirector',
		'MailDirector',
		'TelefonoDirector',
		'CelularDirector',
		'ImagenDirector',
		'EstadoDirector',
	),
)); ?>
