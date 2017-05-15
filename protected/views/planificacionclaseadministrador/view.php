<?php
include_once('planificacion.php');
/* @var $this PlanificacionclaseController */
/* @var $model Planificacionclase */

$this->breadcrumbs=array(
	'Planificaciones'=>array('index'),
	'Sesion Informada: '.$model->SesionInformada, 
);

$this->menu=array(
	array('label'=>'Añadir', 'url'=>array('create','id'=>$model->Estudiante_RutEstudiante)),
	array('label'=>'Editar', 'url'=>array('update', 'id'=>$model->CodPlanificacion)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CodPlanificacion),'confirm'=>'Are you sure you want to delete this item?')),
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
	<ul>
		<ul>
			<h4>Instrucciones de Opciones</h4>
			<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
			<li>Haga click en <strong>"Añadir"</strong> para agregar una nueva planificación de estudiante  a la lista.</li>
			<li>Haga click en <strong>"Editar"</strong> para modificar información de planificación.</li>
			<li>Haga click en <strong>"Eliminar"</strong> para borrar toda la información de planificación.</li>
			<li>Desde la sección <strong>"Administración"</strong> se puede observar una lista de planificaciones existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en <strong>"Administración"</strong> en el panel <strong>"Opciones"</strong> para acceder.</li>
			<li>Haga click en <strong>"Planificaciones de Estudiante"</strong> para acceder a un listado de planificaciones del estudiante seleccionado.</li>
			<li>Haga click en <strong>"Crear PDF"</strong> para generar un documento en formato .pdf con información de la sesión y/o planificación.</li>
			<li>Haga click en <strong>"Ver Bitácora"</strong> para visualizar informacion de bitácora asociada a la planificación.</li>
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
		'estudianteRutEstudiante.NombreEstudiante',
		'centroPracticaRBD.NombreCentroPractica',
		'ProfesorGuiaCP_RutProfGuiaCP',
		'profesorGuiaCPRutProfGuiaCP.NombreProfGuiaCP',
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