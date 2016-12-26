<?php
/* @var $this ClasebitacoraController */
/* @var $model Clasebitacora */

$this->breadcrumbs=array(
	'Clasebitacoras'=>array('index'),
	$model->CodClaseBitacora,
);

$this->menu=array(
	array('label'=>'List Clasebitacora', 'url'=>array('index')),
	array('label'=>'Create Clasebitacora', 'url'=>array('create')),
	array('label'=>'Update Clasebitacora', 'url'=>array('update', 'id'=>$model->CodClaseBitacora)),
	array('label'=>'Delete Clasebitacora', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CodClaseBitacora),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Clasebitacora', 'url'=>array('admin')),
);
?>

<h1>View Clasebitacora #<?php echo $model->CodClaseBitacora; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'CodClaseBitacora',
		'Curso',
		'Hora',
		'Asignatura',
		'ProfesorGuia',
		'NumeroAlumnos',
		'Bitacora_CodBitacora',
	),
)); ?>
