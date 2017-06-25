<?php
/* @var $this EstudianteController */
/* @var $model Estudiante */

$this->pageTitle= Yii::app()->name." - "."Detalles";

$this->breadcrumbs=array(
	'Estudiantes'=>array('index'),
	$model->RutEstudiante,
);

$this->menu=array(
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Editar', 'url'=>array('update', 'id'=>$model->RutEstudiante)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RutEstudiante),'confirm'=>'¡Advertencia! Se eliminarán todas las bitácoras, planificaciones y documentos asociados al estudiante ¿Desea Continuar?')),
	array('label'=>'Administración', 'url'=>array('admin')),
	array('label'=>'Añadir Planificación', 'url'=>array('planificacionclaseadministrador/create','id'=>$model->RutEstudiante)),
	array('label'=>'Planificaciones de Estudiante','url'=>array('planificacionclaseadministrador/adminPlanificacionEstudiante','id'=>$model->RutEstudiante)),
	array('label'=>'Planificaciones', 'url'=>array('planificacionclaseadministrador/admin')),
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Crear Horario', 'url'=>array('horarioadmin/createHorario','id'=>$model->RutEstudiante)),
    array('label'=>'Crear PDF', 'url'=>array('pdf','id'=>$model->RutEstudiante)),
);
?>

<h1>Estudiante: <?php echo $model->NombreEstudiante; ?></h1><br>

<?php if(Yii::app()->user->hasFlash('message')):?>
<div class="row buttons">
	<?php echo Yii::app()->user->getFlash('message'); ?>
</div>
<?php endif; ?>

<div class="collapse">
	<h3>Ayuda</h3>
	<ul align=justify>
		<ul>
			<h4>Instrucciones de Opciones</h4>
			<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
			<li>Haga click en <strong>"Añadir"</strong> para agregar un nuevo estudiante a la lista.</li>
			<li>Haga click en <strong>"Editar"</strong> para modificar información de estudiante.</li>
			<li>Haga click en <strong>"Eliminar"</strong> para borrar toda la información de estudiante.</li>
			<li>Desde la sección <strong>"Administración"</strong> se puede observar una lista de estudiantes existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en <strong>"Administración"</strong> en el panel <strong>"Opciones"</strong> para acceder.</li>
			<li>Haga click en <strong>"Añadir Planificación"</strong> para configurar las sesiones de clases que realizará el estudiante seleccionado.</li>
			<li>Haga click en <strong>"Planificaciones de Estudiante"</strong> para acceder a un listado de planificaciones del estudiante seleccionado.</li>
			<li>Haga click en <strong>"Planificaciones"</strong> para acceder a información correspondiente a las planificaciones de clases de todos los estudiantes.</li>
			<li>Para regresar al índice de estudiantes haga click en <strong>"Lista"</strong>.</li>
            <li>Haga click en <strong>"Crear PDF"</strong> para generar un documento en formato <strong>.pdf</strong> con información de estudiante.</li>
		</ul>
	</ul>
</div><br>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'RutEstudiante',
		'NombreEstudiante',
		'FechaIncorporacion',
		'Mencion_NombreMencion',
		'MailEstudiante',
		'TelefonoEstudiante',
		'CelularEstudiante',
		'ProfesorGuiaCP_RutProfGuiaCP',
		'profesorGuiaCPRutProfGuiaCP.NombreProfGuiaCP',
		'ConfiguracionPractica_NombrePractica',
		'centroPracticaRBD.NombreCentroPractica',
		array(
            'name'=>'ImagenEstudiante',
			'type' => 'raw',
            'value'=>CHtml::Image(Yii::app()->request->baseUrl.'/images/ImagenEstudiantes/'.$model->ImagenEstudiante,"Sin Imagen Disponible",array('onerror'=>"if (this.src != '".Yii::app()->request->baseUrl."/images/FormImages/userplaceholder.jpg"."') this.src = '".Yii::app()->request->baseUrl."/images/FormImages/userplaceholder.jpg"."';",'width'=>'200px','height'=>'200px')),
            ),
		'SituacionFinalEstudiante',
		'ObservacionEstudiante',
	),
)); ?>