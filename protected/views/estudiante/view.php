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
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RutEstudiante),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administración', 'url'=>array('admin')),
	array('label'=>'Añadir Planificación', 'url'=>array('planificacionclaseadministrador/create','id'=>$model->RutEstudiante)),
	array('label'=>'Planificaciones de Estudiante','url'=>array('planificacionclaseadministrador/index','id'=>$model->RutEstudiante)),
	array('label'=>'Planificaciones', 'url'=>array('planificacionclaseadministrador/admin')),
	array('label'=>'Lista', 'url'=>array('index')),
);
?>
<h1>Detalles </h1><br>

<ul>
	<li>En esta sección se puede visualizar toda la información de un estudiante seleccionado.</li>
</ul>

<h1>Estudiante: <?php echo $model->NombreEstudiante; ?></h1>

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
		'ConfiguracionPractica_NombrePractica',
		array('name'=>'Centro de Practica','value'=>$model->centroPracticaRBD->NombreCentroPractica),
		array(
            'name'=>'ImagenEstudiante',
			'type' => 'raw',
            'value'=>CHtml::Image(Yii::app()->request->baseUrl.'/images/ImagenEstudiantes/'.$model->ImagenEstudiante)
            ),
	),
)); ?>

<br>
<br>
<ul>
	<h4>Instrucciones de Opciones</h4>
	<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
	<li>Haga click en "Añadir" para agregar un nuevo estudiante a la lista.</li>
	<li>Haga click en "Actualizar" para modificar información de estudiante.</li>
	<li>Haga click en "Eliminar" para borrar toda la información de estudiante.</li>
	<li>Desde la sección "Administración" se puede observar una lista de estudiantes existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en "Administración" en el panel "Opciones" para acceder.</li>
	<li>Haga click en "Añadir Planificación" para configurar las sesiones de clases que realizará el estudiante seleccionado.</li>
	<li>Haga click en "Planificaciones de Esttudiante" para acceder a un listado de planificaciones del estudiante seleccionado.</li>
	<li>Haga click en "Planificaciones" para acceder a información correspondiente a las planificaciones de clases de todos los estudiantes.</li>
	<li>Para regresar al índice de menciones haga click en "Lista".</li>
</ul><br>
