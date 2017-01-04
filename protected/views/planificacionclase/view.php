<?php
include_once('planificacion.php');
/* @var $this PlanificacionclaseController */
/* @var $model Planificacionclase */

$this->breadcrumbs=array(
	'Planificaciones'=>array('index'),
	$model->CodPlanificacion,
);

$this->menu=array(
	array('label'=>'Lista de Planificaciones', 'url'=>array('index')),
	array('label'=>'Añadir Planificacion', 'url'=>array('create')),
	array('label'=>'Modificar Planificacion', 'url'=>array('planificacionclaseupdate/update', 'id'=>$model->CodPlanificacion)),
	array('label'=>'Eliminar Planificacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CodPlanificacion),'confirm'=>'¡ADVERTENCIA! Esta acción borrará registros asociados a la planificación, tales como Bitácoras y Documentos de Word Adjuntos ¿Desea Continuar?')),
	array('label'=>'Administrar Planificaciones', 'url'=>array('admin')),
    array('label'=>'Crear Bitacora', 'url'=>array('bitacorasesion/create','id'=>$model->CodPlanificacion)),
    array('label'=>'Lista de Bitacoras', 'url'=>array('bitacorasesion/index')),
);
?>

<h1>Sesion Informada: <?php echo $model->SesionInformada; ?></h1>
<h2>Estudiante: <?php echo $model->estudianteRutEstudiante->NombreEstudiante ?> </h2>

<?php 

$arrdata=datosplanificacion($model->Estudiante_RutEstudiante);

?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Estudiante_RutEstudiante',
		array('name'=>'Nombre Estudiante','value'=>$model->estudianteRutEstudiante->NombreEstudiante),
		array('name'=>'Centro de Practica','value'=>$model->centroPracticaRBD->NombreCentroPractica),
		'ProfesorGuiaCP_RutProfGuiaCP',
		array('name'=>'Profesor Guia','value'=>$model->profesorGuiaCPRutProfGuiaCP->NombreProfGuiaCP),
		'Curso',
		'ConfiguracionPractica_NombrePractica',
		'Fecha',
		'SesionInformada',
		array('name'=>'Total de Sesiones','value'=>$arrdata[5]),
        array('name'=>'Numero de Horas','value'=>$arrdata[6]),
		'Ejecutado',
		'Supervisado',
		'ComentarioPlanificacion',
	),
)); ?>
