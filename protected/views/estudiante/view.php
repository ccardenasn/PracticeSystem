<?php
/* @var $this EstudianteController */
/* @var $model Estudiante */

$this->breadcrumbs=array(
	'Estudiantes'=>array('index'),
	$model->RutEstudiante,
);

$this->menu=array(
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->RutEstudiante)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RutEstudiante),'confirm'=>'¡Advertencia! Se eliminarán todas las bitácoras, planificaciones y documentos asociados al estudiante ¿Desea Continuar?')),
	array('label'=>'Administración', 'url'=>array('admin')),
	array('label'=>'Añadir Planificación', 'url'=>array('planificacionclaseadministrador/create','id'=>$model->RutEstudiante)),
	array('label'=>'Planificaciones de Estudiante','url'=>array('planificacionclaseadministrador/adminPlanificacionEstudiante','id'=>$model->RutEstudiante)),
	array('label'=>'Planificaciones', 'url'=>array('planificacionclaseadministrador/admin')),
	array('label'=>'Lista', 'url'=>array('index')),
);
?>

<h1>Estudiante: <?php echo $model->NombreEstudiante; ?></h1><br>

<div class="collapse">
	<h3>Ayuda</h3>
	<ul>
		<ul>
			<h4>Instrucciones de Opciones</h4>
			<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
			<li>Haga click en <b>"Añadir"</b> para agregar un nuevo estudiante a la lista.</li>
			<li>Haga click en <b>"Actualizar"</b> para modificar información de estudiante.</li>
			<li>Haga click en <b>"Eliminar"</b> para borrar toda la información de estudiante.</li>
			<li>Desde la sección <b>"Administración"</b> se puede observar una lista de estudiantes existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en <b>"Administración"</b> en el panel <b>"Opciones"</b> para acceder.</li>
			<li>Haga click en <b>"Añadir Planificación"</b> para configurar las sesiones de clases que realizará el estudiante seleccionado.</li>
			<li>Haga click en <b>"Planificaciones de Estudiante"</b> para acceder a un listado de planificaciones del estudiante seleccionado.</li>
			<li>Haga click en <b>"Planificaciones"</b> para acceder a información correspondiente a las planificaciones de clases de todos los estudiantes.</li>
			<li>Para regresar al índice de estudiantes haga click en <b>"Lista"</b>.</li>
		</ul>
	</ul>
</div><br>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>

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
		array('name'=>'ProfesorGuiaCP_RutProfGuiaCP','value'=>$model->profesorGuiaCPRutProfGuiaCP->NombreProfGuiaCP),
		'ConfiguracionPractica_NombrePractica',
		array('name'=>'CentroPractica_RBD','value'=>$model->centroPracticaRBD->NombreCentroPractica),
		array(
            'name'=>'ImagenEstudiante',
			'type' => 'raw',
            'value'=>CHtml::Image(Yii::app()->request->baseUrl.'/images/ImagenEstudiantes/'.$model->ImagenEstudiante)
            ),
		'SituacionFinalEstudiante',
		'ObservacionEstudiante',
	),
)); ?>