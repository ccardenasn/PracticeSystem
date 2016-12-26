<?php
/* @var $this BitacoraController */
/* @var $model Bitacora */

$this->breadcrumbs=array(
	'Bitacoras'=>array('index'),
	$model->CodBitacora,
);

$this->menu=array(
	array('label'=>'List Bitacora', 'url'=>array('index')),
	array('label'=>'Create Bitacora', 'url'=>array('create')),
	array('label'=>'Update Bitacora', 'url'=>array('update', 'id'=>$model->CodBitacora)),
	array('label'=>'Delete Bitacora', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CodBitacora),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Bitacora', 'url'=>array('admin')),
);
?>

<h1>View Bitacora #<?php echo $model->CodBitacora; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'CodBitacora',
		'Fecha',
		'ActividadesRealizadas',
		'Aprendizaje',
		'Sentir',
		'OtroComentario',
		'DocumentoWord',
		'PlanificacionClase_CodPlanificacion',
	),
)); ?>
