<?php
/* @var $this ListaestudianteController */
/* @var $model Listaestudiante */

$this->breadcrumbs=array('Añadir Lista de Estudiantes',);

$this->menu=array(
	array('label'=>'Lista de Estudiantes', 'url'=>array('estudiante/index')),
	array('label'=>'Administrar Estudiante', 'url'=>array('estudiante/admin')),
	array('label'=>'Añadir Estudiante', 'url'=>array('estudiante/create')),
);
?>

<h1>Añadir Lista de Estudiantes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'estudiante-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'RutEstudiante',
		'NombreEstudiante',
		'ClaveEstudiante',
		'FechaIncorporacion',
		'Mencion_NombreMencion',
		'MailEstudiante',
		/*
		'TelefonoEstudiante',
		'CelularEstudiante',
		'ProfesorGuiaCP_RutProfGuiaCP',
		'ConfiguracionPractica_NombrePractica',
		'ImagenEstudiante',
		'SesionesPlanificadas',
		'HorasPlanificadas',
		*/
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}{delete}',
		),
	),
)); ?>