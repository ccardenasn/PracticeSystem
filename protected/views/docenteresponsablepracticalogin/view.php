<?php
/* @var $this DocenteresponsablepracticaloginController */
/* @var $model Docenteresponsablepracticalogin */

$this->breadcrumbs=array(
	'Docenteresponsablepracticalogins'=>array('index'),
	$model->RutResponsable,
);

$this->menu=array(
	array('label'=>'List Docenteresponsablepracticalogin', 'url'=>array('index')),
	array('label'=>'Create Docenteresponsablepracticalogin', 'url'=>array('create')),
	array('label'=>'Update Docenteresponsablepracticalogin', 'url'=>array('update', 'id'=>$model->RutResponsable)),
	array('label'=>'Delete Docenteresponsablepracticalogin', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RutResponsable),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Docenteresponsablepracticalogin', 'url'=>array('admin')),
);
?>

<h1>View Docenteresponsablepracticalogin #<?php echo $model->RutResponsable; ?></h1>

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
	),
)); ?>
