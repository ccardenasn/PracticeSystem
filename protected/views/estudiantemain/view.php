<?php
/* @var $this EstudiantemainController */
/* @var $model Estudiantemain */

$this->breadcrumbs=array(
	'Estudiantemains'=>array('index'),
	$model->RutEstudiante,
);

$this->menu=array(
	array('label'=>'List Estudiantemain', 'url'=>array('index')),
	array('label'=>'Create Estudiantemain', 'url'=>array('create')),
	array('label'=>'Update Estudiantemain', 'url'=>array('update', 'id'=>$model->RutEstudiante)),
	array('label'=>'Delete Estudiantemain', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RutEstudiante),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Estudiantemain', 'url'=>array('admin')),
);
?>

<h1>View Estudiantemain #<?php echo $model->RutEstudiante; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'RutEstudiante',
		'NombreEstudiante',
		'ClaveEstudiante',
		'FechaIncorporacion',
		'Mencion_CodMencion',
		'MailEstudiante',
		'TelefonoEstudiante',
		'CelularEstudiante',
		'ProfesorGuiaCP_RutProfGuiaCP',
		'ConfiguracionPractica_NombrePractica',
		'CentroPractica_RBD',
		'ImagenEstudiante',
		'SituacionFinalEstudiante',
		'ObservacionEstudiante',
		'Estado',
	),
)); ?>
