<?php
include_once('planificacion.php');
/* @var $this BitacorasesionController */
/* @var $model Bitacorasesion */

$student=Yii::app()->user->name;
$arrdata=datosplanificacion($student);

$this->breadcrumbs=array(
	'Bitácoras'=>array('index'),
	$model->CodBitacora=>array('view','id'=>$model->CodBitacora),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Detalles', 'url'=>array('view', 'id'=>$model->CodBitacora)),
	array('label'=>'Administración', 'url'=>array('admin')),
	array('label'=>'Planificaciones de Estudiante', 'url'=>array('planificacionclase/index')),
);
?>

<h1>Modificar Bitácora</h1><br>
<h2>Estudiante: <?php echo $model->planificacionClaseCodPlanificacion->estudianteRutEstudiante->NombreEstudiante ?> </h2><br>

<ul>
	<h4>Instrucciones de Opciones</h4>
	<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
	<li>Para regresar al índice de bitácoras haga click en <b>"Lista"</b>.</li>
	<li>Haga click en <b>"Añadir"</b> para agregar una bitácora.</li>
	<li>Haga click en <b>"Detalles"</b> para visualizar información de bitácora.</li>
	<li>Desde la sección <b>"Administración"</b> se puede observar una lista de bitácoras existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en <b>"Administración"</b> en el panel <b>"Opciones"</b> para acceder.</li>
	<li>Haga click en <b>"Planificaciones de Estudiante"</b> para acceder a un listado de planificaciones del estudiante seleccionado.</li>

</ul>

<?php $this->renderPartial('_updateForm',
						   array(
							   'model'=>$model,
							   'claseBitacoraModel'=>$claseBitacoraModel,
						   )); ?>