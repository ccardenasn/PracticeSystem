<?php
/* @var $this BloqueController */
/* @var $model Bloque */

$this->breadcrumbs=array(
	'Bloques'=>array('index'),
	$model->CodBloque,
);

$this->menu=array(
	array('label'=>'List Bloque', 'url'=>array('index')),
	array('label'=>'Create Bloque', 'url'=>array('create')),
	array('label'=>'Update Bloque', 'url'=>array('update', 'id'=>$model->CodBloque)),
	array('label'=>'Delete Bloque', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CodBloque),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Bloque', 'url'=>array('admin')),
);
?>

<h1>View Bloque #<?php echo $model->CodBloque; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'CodBloque',
		'NombreBloque',
		'HoraInicio',
		'HoraFin',
	),
)); ?>
