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
	$url = 'bitacorasesionadmin/viewPlanificacionBitacora';
}else{
	$label = 'Crear Bitácora';
	$url = 'bitacorasesionadmin/create';
}

$this->menu=array(
	array('label'=>'Añadir', 'url'=>array('create','id'=>$model->Estudiante_RutEstudiante)),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->CodPlanificacion)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CodPlanificacion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administración', 'url'=>array('admin')),
	array('label'=>'Planificaciones de Estudiante', 'url'=>array('planificacionclaseadministrador/adminPlanificacionEstudiante','id'=>$model->Estudiante_RutEstudiante)),
	array('label'=>'Crear PDF', 'url'=>array('pdf','id'=>$model->CodPlanificacion)),
    array('label'=>$label, 'url'=>array($url, 'id'=>$model->CodPlanificacion)),
);
?>

<h1>Sesion Informada: <?php echo $model->SesionInformada; ?></h1>

<h2>Estudiante: <?php echo $model->estudianteRutEstudiante->NombreEstudiante; ?></h2>

<div class="collapse">
	<h3>Ayuda</h3>
	<ul>
		<ul>
			<h4>Instrucciones de Opciones</h4>
			<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
			<li>Haga click en <b>"Añadir"</b> para agregar una nueva planificación de estudiante  a la lista.</li>
			<li>Haga click en <b>"Actualizar"</b> para modificar información de planificación.</li>
			<li>Haga click en <b>"Eliminar"</b> para borrar toda la información de planificación.</li>
			<li>Desde la sección <b>"Administración"</b> se puede observar una lista de planificaciones existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en <b>"Administración"</b> en el panel <b>"Opciones"</b> para acceder.</li>
			<li>Haga click en <b>"Planificaciones de Estudiante"</b> para acceder a un listado de planificaciones del estudiante seleccionado.</li>
			<li>Haga click en <b>"Crear PDF"</b> para generar un documento en formato .pdf con información de la sesión y/o planificación.</li>
			<li>Haga click en <b>"Ver Bitácora"</b> para visualizar informacion de bitácora asociada a la planificación.</li>
		</ul>
	</ul>
</div>
<br>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>

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