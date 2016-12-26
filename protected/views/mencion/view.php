<?php
/* @var $this MencionController */
/* @var $model Mencion */

$this->breadcrumbs=array(
	'Menciones'=>array('index'),
	$model->NombreMencion,
);

$this->menu=array(
	array('label'=>'Lista de Menciones', 'url'=>array('index')),
	array('label'=>'Añadir Mencion', 'url'=>array('create')),
	array('label'=>'Modificar Mencion', 'url'=>array('update', 'id'=>$model->NombreMencion)),
	array('label'=>'Eliminar Mencion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->NombreMencion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Menciones', 'url'=>array('admin')),
);
?>

<h1>Mencion: <?php echo $model->NombreMencion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'NombreMencion',
	),
)); ?>
