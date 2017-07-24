<?php
/* @var $this EstudianteresponsableController */
/* @var $model Estudianteresponsable */

$this->breadcrumbs=array(
	'Estudianteresponsables'=>array('index'),
	$model->RutEstudiante,
);

$this->menu=array(
	array('label'=>'List Estudianteresponsable', 'url'=>array('index')),
	array('label'=>'Create Estudianteresponsable', 'url'=>array('create')),
	array('label'=>'Update Estudianteresponsable', 'url'=>array('update', 'id'=>$model->RutEstudiante)),
	array('label'=>'Delete Estudianteresponsable', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RutEstudiante),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Estudianteresponsable', 'url'=>array('admin')),
);
?>

<h1>View Estudianteresponsable #<?php echo $model->RutEstudiante; ?></h1>

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
		'ConfiguracionPractica_CodPractica',
		'CentroPractica_RBD',
		'ImagenEstudiante',
		'SituacionFinalEstudiante',
		'ObservacionEstudiante',
		'Estado',
	),
)); ?>
