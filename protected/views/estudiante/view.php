<?php
/* @var $this EstudianteController */
/* @var $model Estudiante */

$this->breadcrumbs=array(
	'Estudiantes'=>array('index'),
	$model->RutEstudiante,
);

$this->menu=array(
	array('label'=>'List Estudiante', 'url'=>array('index')),
	array('label'=>'Create Estudiante', 'url'=>array('create')),
	array('label'=>'Update Estudiante', 'url'=>array('update', 'id'=>$model->RutEstudiante)),
	array('label'=>'Delete Estudiante', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RutEstudiante),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Estudiante', 'url'=>array('admin')),
);
?>

<h1>View Estudiante #<?php echo $model->RutEstudiante; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'RutEstudiante',
		'NombreEstudiante',
		'ClaveEstudiante',
		'FechaIncorporacion',
		'Mencion_NombreMencion',
		'MailEstudiante',
		'TelefonoEstudiante',
		'CelularEstudiante',
		'ProfesorGuiaCP_RutProfGuiaCP',
		'ConfiguracionPractica_NombrePractica',
		'CentroPractica_RBD',
		'ImagenEstudiante',
		'SituacionFinalEstudiante',
		'ObservacionEstudiante',
	),
)); ?>
