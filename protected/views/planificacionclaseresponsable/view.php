<?php
/* @var $this PlanificacionclaseresponsableController */
/* @var $model Planificacionclaseresponsable */

$this->pageTitle= Yii::app()->name." - "."Detalles";

$this->breadcrumbs=array(
	'Planificaciones'=>array('index'),
	'Sesion Informada: '.$model->SesionInformada, 
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Editar', 'url'=>array('update', 'id'=>$model->CodPlanificacion)),
	array('label'=>'Administración', 'url'=>array('admin')),
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
			<li>Haga click en <strong>"Editar"</strong> para modificar información de planificación.</li>
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
    'cssFile' => Yii::app()->baseUrl .'/css/detailview/styles.css',
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
		'Ejecutado',
		'Supervisado',
		'ComentarioPlanificacion',
		array(
            'name'=>'DocumentoPlanificacion (click en el enlace)',
			'type' => 'raw',
            'value'=>CHtml::link(CHtml::encode($model->DocumentoPlanificacion), Yii::app()->baseUrl .'/documentsFiles/planificacionDocuments/'.$model->DocumentoPlanificacion,array('target'=>'_blank'))
            ),
	),
)); ?>