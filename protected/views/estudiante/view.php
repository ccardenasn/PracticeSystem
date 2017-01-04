<?php
/* @var $this EstudianteController */
/* @var $model Estudiante */

$this->breadcrumbs=array(
	'Estudiantes'=>array('index'),
	$model->RutEstudiante,
);

$this->menu=array(
	array('label'=>'Lista de Estudiantes', 'url'=>array('index')),
	array('label'=>'Añadir Estudiante', 'url'=>array('create')),
	array('label'=>'Modificar Estudiante', 'url'=>array('update', 'id'=>$model->RutEstudiante)),
	array('label'=>'Eliminar Estudiante', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RutEstudiante),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Estudiantes', 'url'=>array('admin')),
	array('label'=>'Añadir Planificacion', 'url'=>array('planificacionclaseadministrador/create','id'=>$model->RutEstudiante)),
	array('label'=>'Planificaciones de Estudiante','url'=>array('planificacionclaseadministrador/index','id'=>$model->RutEstudiante)),
	array('label'=>'Administrar Planificaciones', 'url'=>array('planificacionclaseadministrador/admin')),
);
?>

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
