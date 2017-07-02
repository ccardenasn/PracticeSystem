<?php
/* @var $this PlanificacionclaseController */
/* @var $model Planificacionclase */

$this->pageTitle= Yii::app()->name." - "."Detalles";

$this->breadcrumbs=array(
	'Planificaciones'=>array('index'),
	'Sesion Informada: '.$model->SesionInformada, 
);

$this->menu=array(
	array('label'=>'Añadir', 'url'=>array('create','id'=>$model->Estudiante_RutEstudiante)),
	array('label'=>'Editar', 'url'=>array('update', 'id'=>$model->CodPlanificacion)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CodPlanificacion),'confirm'=>'¿Está seguro de querer eliminar este elemento? Si realiza esta acción se eliminarán todos los datos de bitácora asociados a esta planificación.')),
	array('label'=>'Administración', 'url'=>array('admin')),
	array('label'=>'Planificaciones de Estudiante', 'url'=>array('planificacionclaseadministrador/adminPlanificacionEstudiante','id'=>$model->Estudiante_RutEstudiante)),
	array('label'=>'Crear PDF', 'url'=>array('pdf','id'=>$model->CodPlanificacion)),
    array('label'=>'Crear Bitácora', 'url'=>array('bitacorasesionadmin/create', 'id'=>$model->CodPlanificacion)),
	array('label'=>'Ver Bitácora', 'url'=>array('bitacorasesionadmin/viewPlanificacionBitacora', 'id'=>$model->CodPlanificacion)),
);
?>

<h1>Sesion Informada: <?php echo $model->SesionInformada; ?></h1>

<?php if(Yii::app()->user->hasFlash('message')):?>
<div class="row buttons">
	<?php echo Yii::app()->user->getFlash('message'); ?>
</div>
<?php endif; ?>

<h2>Estudiante: <?php echo $model->estudianteRutEstudiante->NombreEstudiante; ?></h2>

<div class="collapse">
	<h3>Ayuda</h3>
	<ul align=justify>
		<ul>
			<h4>Instrucciones de Opciones</h4>
			<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
			<li>Haga click en <strong>"Añadir"</strong> para agregar una nueva planificación de estudiante  a la lista.</li>
			<li>Haga click en <strong>"Editar"</strong> para modificar información de planificación.</li>
			<li>Haga click en <strong>"Eliminar"</strong> para borrar toda la información de planificación.</li>
			<li>Desde la sección <strong>"Administración"</strong> se puede observar una lista de planificaciones existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en <strong>"Administración"</strong> en el panel <strong>"Opciones"</strong> para acceder.</li>
			<li>Haga click en <strong>"Planificaciones de Estudiante"</strong> para acceder a un listado de planificaciones del estudiante seleccionado.</li>
			<li>Haga click en <strong>"Crear PDF"</strong> para generar un documento en formato <strong>.pdf</strong> con información de la sesión y/o planificación.</li>
			<li>Haga click en <strong>"Ver Bitácora"</strong> para visualizar informacion de bitácora asociada a la planificación.</li>
		</ul>
	</ul>
</div>
<br>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Estudiante_RutEstudiante',
		'estudianteRutEstudiante.NombreEstudiante',
		'centroPracticaRBD.NombreCentroPractica',
		'ProfesorGuiaCP_RutProfGuiaCP',
		'profesorGuiaCPRutProfGuiaCP.NombreProfGuiaCP',
		'Curso',
		'configuracionPracticaCodPractica.NombrePractica',
		'Fecha',
		'SesionInformada',
        'configuracionPracticaCodPractica.NumeroSesionesPractica',
        'configuracionPracticaCodPractica.NumeroHorasPractica',
		'Ejecutado',
		'Supervisado',
		'ComentarioPlanificacion',
	),
)); ?>

<br>
<br>