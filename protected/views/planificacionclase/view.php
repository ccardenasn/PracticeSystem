<?php
include_once('planificacion.php');
/* @var $this PlanificacionclaseController */
/* @var $model Planificacionclase */

$this->breadcrumbs=array(
	'Planificaciones'=>array('index'),
	$model->CodPlanificacion,
);

$logBookExist = containsBitacora($model->CodPlanificacion);
$label='';
$url='';
if($logBookExist != 0){
	$label = 'Ver Bitácora';
	$url = 'bitacorasesion/viewPlanificacionBitacora';
}else{
	$label = 'Crear Bitácora';
	$url = 'bitacorasesion/create';
}

$this->menu=array(
	array('label'=>'Planificación de Clases', 'url'=>array('index')),
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('planificacionclaseupdate/update', 'id'=>$model->CodPlanificacion)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CodPlanificacion),'confirm'=>'¡ADVERTENCIA! Esta acción borrará registros asociados a la planificación, tales como Bitácoras y Documentos de Word Adjuntos ¿Desea Continuar?')),
	array('label'=>'Administración de Planificaciones', 'url'=>array('admin','id'=>$model->Estudiante_RutEstudiante)),
	array('label'=>'Administración de Bitacoras', 'url'=>array('bitacorasesion/admin','id'=>$model->Estudiante_RutEstudiante)),
	array('label'=>$label, 'url'=>array($url, 'id'=>$model->CodPlanificacion)),
	//array('label'=>'Crear Bitacora', 'url'=>array('bitacorasesion/create','id'=>$model->CodPlanificacion)),
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

<br>
<br>
<ul>
	<h4>Instrucciones de Opciones</h4>
	<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
	<li>Haga click en "Planificación de Clases" para regresar al inicio de la sección de Planificaciones.</li>
	<li>Haga click en "Añadir" para agregar una nueva planificación a la lista.</li>
	<li>Haga click en "Actualizar" para modificar información de planificación.</li>
	<li>Haga click en "Eliminar" para borrar toda la información de planificación.</li>
	<li>Desde la sección "Administración de Planificaciones" se puede observar una lista de planificaciones de estudiante existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en "Administración de Planifciaciones" en el panel "Opciones" para acceder.</li>
	<li>Haga click en "Crear Bitácora" para generar una bitácora asociada a la planificación.</li>
	<li>Desde la sección "Administración de Bitácoras" se puede observar una lista de bitácoras de estudiante existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en "Administración de Bitácoras" en el panel "Opciones" para acceder.</li>
	<li>Haga click en "Ver Bitácora" para visualizar informacion de bitácora asociada a la planificación.</li>
</ul><br>
