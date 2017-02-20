<?php
/* @var $this CentropracticamainController */
/* @var $model Centropractica */

$this->breadcrumbs=array(
	'Centropracticas'=>array('index'),
	$model->RBD,
);

$this->menu=array(
	array('label'=>'List Centropractica', 'url'=>array('index')),
	array('label'=>'Create Centropractica', 'url'=>array('create')),
	array('label'=>'Update Centropractica', 'url'=>array('update', 'id'=>$model->RBD)),
	array('label'=>'Delete Centropractica', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RBD),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Centropractica', 'url'=>array('admin')),
);
?>

<h1>View Centropractica #<?php echo $model->RBD; ?></h1>

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
