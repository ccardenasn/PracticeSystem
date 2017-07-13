<?php
/* @var $this DocenteresponsablepracticamainController */
/* @var $model Docenteresponsablepracticamain */

$this->breadcrumbs=array(
	'Docenteresponsablepracticamains'=>array('index'),
	$model->RutResponsable,
);

$this->menu=array(
	array('label'=>'List Docenteresponsablepracticamain', 'url'=>array('index')),
	array('label'=>'Create Docenteresponsablepracticamain', 'url'=>array('create')),
	array('label'=>'Update Docenteresponsablepracticamain', 'url'=>array('update', 'id'=>$model->RutResponsable)),
	array('label'=>'Delete Docenteresponsablepracticamain', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RutResponsable),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Docenteresponsablepracticamain', 'url'=>array('admin')),
);
?>

<h1>View Docenteresponsablepracticamain #<?php echo $model->RutResponsable; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'RutResponsable',
		'NombreResponsable',
		'ClaveResponsable',
		'MailResponsable',
		'TelefonoResponsable',
		'CelularResponsable',
		'ImagenResponsable',
		'EstadoResponsable',
	),
)); ?>
