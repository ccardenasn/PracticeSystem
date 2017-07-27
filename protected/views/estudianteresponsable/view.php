<?php
/* @var $this EstudianteresponsableController */
/* @var $model Estudianteresponsable */

$this->pageTitle= Yii::app()->name." - "."Detalles";

$this->breadcrumbs=array(
	'Estudiantes'=>array('index'),
	$model->RutEstudiante,
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Administración', 'url'=>array('admin')),
    array('label'=>'Planificaciones de Estudiante','url'=>array('planificacionclaseresponsable/adminPlanificacionEstudianteResponsable','id'=>$model->RutEstudiante)),
    array('label'=>'Planificaciones', 'url'=>array('planificacionclaseresponsable/admin')),
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
			<li>Desde la sección <b>"Administración"</b> se puede observar una lista de estudiantes existentes, además puede visualizar la información de cada estudiante. Haga click en <b>"Administración"</b> en el panel <b>"Opciones"</b> para acceder.</li>
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
    'cssFile' => Yii::app()->baseUrl .'/css/detailview/styles.css',
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
		'configuracionPracticaCodPractica.NombrePractica',
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
