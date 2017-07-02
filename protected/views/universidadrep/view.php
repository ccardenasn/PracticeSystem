<?php
/* @var $this UniversidadrepController */
/* @var $model Universidadrep */

$this->breadcrumbs=array(
	'Universidadreps'=>array('index'),
	$model->CodInstitucion,
);

$this->menu=array(
	array('label'=>'List Universidadrep', 'url'=>array('index')),
	array('label'=>'Create Universidadrep', 'url'=>array('create')),
	array('label'=>'Update Universidadrep', 'url'=>array('update', 'id'=>$model->CodInstitucion)),
	array('label'=>'Delete Universidadrep', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CodInstitucion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Universidadrep', 'url'=>array('admin')),
);
?>

<h1>View Universidadrep #<?php echo $model->CodInstitucion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'CodInstitucion',
		'NombreInstitucion',
		'Sede',
		'Campus',
		'Facultad',
		'Region_codRegion',
		'Provincia_codProvincia',
		'Ciudad_codCiudad',
	),
)); ?>
