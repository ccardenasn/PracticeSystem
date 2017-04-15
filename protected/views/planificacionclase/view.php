<?php
include_once('planificacion.php');
/* @var $this PlanificacionclaseController */
/* @var $model Planificacionclase */

$this->breadcrumbs=array(
	'Planificaciones'=>array('index'),
	'Sesion Informada: '.$model->SesionInformada,
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
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->CodPlanificacion)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CodPlanificacion),'confirm'=>'¡ADVERTENCIA! Esta acción borrará registros asociados a la planificación, tales como Bitácoras y Documentos de Word Adjuntos ¿Desea Continuar?')),
	array('label'=>'Administración de Planificaciones', 'url'=>array('admin','id'=>$model->Estudiante_RutEstudiante)),
	array('label'=>'Administración de Bitacoras', 'url'=>array('bitacorasesion/admin','id'=>$model->Estudiante_RutEstudiante)),
	array('label'=>$label, 'url'=>array($url, 'id'=>$model->CodPlanificacion)),
);
?>

<h1>Sesion Informada: <?php echo $model->SesionInformada; ?></h1>
<h2>Estudiante: <?php echo $model->estudianteRutEstudiante->NombreEstudiante ?> </h2>

<div class="collapse">
	<h3>Ayuda</h3>
	<ul>
		<ul>
			<h4>Instrucciones de Opciones</h4>
			<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
			<li>Haga click en <b>"Planificación de Clases"</b> para regresar al inicio de la sección de Planificaciones.</li>
			<li>Haga click en <b>"Añadir"</b> para agregar una nueva planificación a la lista.</li>
			<li>Haga click en <b>"Actualizar"</b> para modificar información de planificación.</li>
			<li>Haga click en <b>"Eliminar"</b> para borrar toda la información de planificación.</li>
			<li>Desde la sección <b>"Administración de Planificaciones"</b> se puede observar una lista de planificaciones de estudiante existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en <b>"Administración de Planifciaciones"</b> en el panel <b>"Opciones"</b> para acceder.</li>
			<li>Haga click en <b>"Crear Bitácora"</b> para generar una bitácora asociada a la planificación.</li>
			<li>Desde la sección <b>"Administración de Bitácoras"</b> se puede observar una lista de bitácoras de estudiante existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en <b>"Administración de Bitácoras"</b> en el panel <b>"Opciones"</b> para acceder.</li>
			<li>Haga click en <b>"Ver Bitácora"</b> para visualizar informacion de bitácora asociada a la planificación.</li>
		</ul>
	</ul>
</div><br>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>

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
		array('name'=>'Total de Sesiones','value'=>$model->configuracionPracticaNombrePractica->NumeroSesionesPractica),
		array('name'=>'Numero de Horas','value'=>$model->configuracionPracticaNombrePractica->NumeroHorasPractica),
		'Ejecutado',
		'Supervisado',
		'ComentarioPlanificacion',
	),
)); ?>
