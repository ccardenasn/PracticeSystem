<?php
/* @var $this PlanificacionclasemainController */
/* @var $model Planificacionclasemain */

$this->breadcrumbs=array(
	'Planificacionclasemains'=>array('index'),
	$model->CodPlanificacion,
);

$this->menu=array(
	array('label'=>'List Planificacionclasemain', 'url'=>array('index')),
	array('label'=>'Create Planificacionclasemain', 'url'=>array('create')),
	array('label'=>'Update Planificacionclasemain', 'url'=>array('update', 'id'=>$model->CodPlanificacion)),
	array('label'=>'Delete Planificacionclasemain', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CodPlanificacion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Planificacionclasemain', 'url'=>array('admin')),
);
?>

<h1>View Planificacionclasemain #<?php echo $model->CodPlanificacion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'CodPlanificacion',
		'Estudiante_RutEstudiante',
		'CentroPractica_RBD',
		'ProfesorGuiaCP_RutProfGuiaCP',
		'Curso',
		'ConfiguracionPractica_CodPractica',
		'Fecha',
		'SesionInformada',
		'Ejecutado',
		'Supervisado',
		'ComentarioPlanificacion',
		'DocumentoPlanificacion',
	),
)); ?>
