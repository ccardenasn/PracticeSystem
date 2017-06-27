<?php
/* @var $this PerfilestudianteController */
/* @var $model Perfilestudiante */

$this->pageTitle= Yii::app()->name." - "."Perfil";

$this->breadcrumbs=array(
	$model->RutEstudiante,
);

$this->menu=array(
	array('label'=>'Editar', 'url'=>array('update', 'id'=>$model->RutEstudiante)),
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
			<li>Haga click en <strong>"Editar"</strong> para modificar información de estudiante.</li>
			<li>Haga click en <strong>"Planificaciones/Bitácoras"</strong> para acceder a información correspondiente a las planificaciones de clases de estudiante.</li>
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
		'mencionCodMencion.NombreMencion',
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
            'value'=>CHtml::Image(Yii::app()->request->baseUrl.'/images/ImagenEstudiantes/'.$model->ImagenEstudiante,"Sin Imagen Disponible",array('onerror'=>"if (this.src != '".Yii::app()->request->baseUrl."/images/FormImages/userplaceholder.jpg"."') this.src = '".Yii::app()->request->baseUrl."/images/FormImages/userplaceholder.jpg"."';",'width'=>'200px','height'=>'200px')),
            ),
		'SituacionFinalEstudiante',
		'ObservacionEstudiante',
	),
)); ?>
