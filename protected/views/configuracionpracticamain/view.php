<?php
/* @var $this ConfiguracionpracticamainController */
/* @var $model Configuracionpracticamain */

$this->breadcrumbs=array(
	'Configuracionpracticamains'=>array('index'),
	$model->NombrePractica,
);

$this->menu=array(
	array('label'=>'List Configuracionpracticamain', 'url'=>array('index')),
	array('label'=>'Create Configuracionpracticamain', 'url'=>array('create')),
	array('label'=>'Update Configuracionpracticamain', 'url'=>array('update', 'id'=>$model->NombrePractica)),
	array('label'=>'Delete Configuracionpracticamain', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->NombrePractica),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Configuracionpracticamain', 'url'=>array('admin')),
);
?>

<h1>View Configuracionpracticamain #<?php echo $model->NombrePractica; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'NombrePractica',
		'DescripcionPractica',
		'FechaPractica',
		'Semestre_CodSemestre',
		'NumeroSesionesPractica',
		'NumeroHorasPractica',
		'DocenteCoordinadorPracticas_RutCoordinador',
		'DocenteResponsablePractica_RutResponsable',
	),
)); ?>
