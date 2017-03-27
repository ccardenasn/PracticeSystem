<?php
/* @var $this ProfesorguiacpmainController */
/* @var $model Profesorguiacp */

$this->breadcrumbs=array(
	'Profesorguiacps'=>array('index'),
	$model->RutProfGuiaCP,
);

$this->menu=array(
	array('label'=>'List Profesorguiacp', 'url'=>array('index')),
	array('label'=>'Create Profesorguiacp', 'url'=>array('create')),
	array('label'=>'Update Profesorguiacp', 'url'=>array('update', 'id'=>$model->RutProfGuiaCP)),
	array('label'=>'Delete Profesorguiacp', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RutProfGuiaCP),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Profesorguiacp', 'url'=>array('admin')),
);
?>

<h1>View Profesorguiacp #<?php echo $model->RutProfGuiaCP; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'RutProfGuiaCP',
		'NombreProfGuiaCP',
		'CursoProfGuiaCP',
		'ProfesorJefeProfGuiaCP',
		'MailProfGuiaCP',
		'TelefonoProfGuiaCP',
		'CelularProfGuiaCP',
		'CentroPractica_RBD',
		'ImagenProfGuiaCP',
	),
)); ?>
