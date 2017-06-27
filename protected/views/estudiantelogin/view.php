<?php
/* @var $this EstudianteloginController */
/* @var $model Estudiantelogin */

$this->breadcrumbs=array(
	'Estudiantelogins'=>array('index'),
	$model->RutEstudiante,
);

$this->menu=array(
	array('label'=>'List Estudiantelogin', 'url'=>array('index')),
	array('label'=>'Create Estudiantelogin', 'url'=>array('create')),
	array('label'=>'Update Estudiantelogin', 'url'=>array('update', 'id'=>$model->RutEstudiante)),
	array('label'=>'Delete Estudiantelogin', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RutEstudiante),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Estudiantelogin', 'url'=>array('admin')),
);
?>

<h1>View Estudiantelogin #<?php echo $model->RutEstudiante; ?></h1>

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
