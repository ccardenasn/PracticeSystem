<?php
/* @var $this PerfilestudianteController */
/* @var $model Perfilestudiante */

$this->breadcrumbs=array(
	'Perfilestudiantes'=>array('index'),
	$model->RutEstudiante,
);

$this->menu=array(
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->RutEstudiante)),
	array('label'=>'Planificaciones/Bitácoras','url'=>array('/planificacionclase')),
);
?>

<h1>Estudiante: <?php echo $model->NombreEstudiante; ?></h1><br>

<div class="collapse">
	<h3>Ayuda</h3>
	<ul>
		<ul>
			<h4>Instrucciones de Opciones</h4>
			<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
			<li>Haga click en "Actualizar" para modificar información de estudiante.</li>
			<li>Haga click en "Planificaciones/Bitácoras" para acceder a información correspondiente a las planificaciones de clases de estudiante.</li>
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
		'profesorGuiaCPRutProfGuiaCP.NombreProfGuiaCP',
		'ConfiguracionPractica_NombrePractica',
		//'CentroPractica_RBD',
		'centroPracticaRBD.NombreCentroPractica',
		array(
            'name'=>'ImagenEstudiante',
			'type' => 'raw',
            'value'=>CHtml::Image(Yii::app()->request->baseUrl.'/images/ImagenEstudiantes/'.$model->ImagenEstudiante)
            ),
		'SituacionFinalEstudiante',
		'ObservacionEstudiante',
	),
)); ?>
