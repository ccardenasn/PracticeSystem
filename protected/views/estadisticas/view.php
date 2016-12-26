<?php
/* @var $this EstadisticasController */
/* @var $model Estadisticas */

$this->breadcrumbs=array(
	'Estadisticases'=>array('index'),
	$model->RBD,
);

$this->menu=array(
	array('label'=>'List Estadisticas', 'url'=>array('index')),
	array('label'=>'Create Estadisticas', 'url'=>array('create')),
	array('label'=>'Update Estadisticas', 'url'=>array('update', 'id'=>$model->RBD)),
	array('label'=>'Delete Estadisticas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RBD),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Estadisticas', 'url'=>array('admin')),
);
?>

<h1>View Estadisticas #<?php echo $model->RBD; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'RBD',
		'NombreCentroPractica',
		'VigenciaProtocolo',
		'FechaProtocolo',
		'AnexoProtocolo',
		'Dependencia',
		'NivelEducacional',
		'Area',
		'Region_codRegion',
		'Provincia_codProvincia',
		'Ciudad_codCiudad',
		'Calle',
	),
)); ?>
