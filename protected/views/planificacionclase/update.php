<?php
/* @var $this PlanificacionclaseController */
/* @var $model Planificacionclase */

$this->breadcrumbs=array(
	'Planificaciones'=>array('index'),
	$model->CodPlanificacion=>array('view','id'=>$model->CodPlanificacion),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Planificaciones', 'url'=>array('index')),
	array('label'=>'Añadir', 'url'=>array('create','id'=>$model->Estudiante_RutEstudiante)),
	array('label'=>'Detalles', 'url'=>array('view', 'id'=>$model->CodPlanificacion)),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Modificar Planificación </h1>
<h2>Estudiante: <?php echo $model->estudianteRutEstudiante->NombreEstudiante; ?></h2>
<h2>Sesion Informada: <?php echo $model->SesionInformada; ?></h2>

<div class="collapse">
	<h3>Ayuda</h3>
	<ul>
		<ul>
			<h4>Instrucciones de Opciones</h4>
			<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
			<li>Para regresar a la sección de planificaciones haga click en "Planificaciones".</li>
			<li>Haga click en "Añadir" para agregar una nueva  planificación y/o sesión de estudiante.</li>
			<li>Haga click en "Detalles" para visualizar información de planificación.</li>
			<li>Desde la sección "Administración" se puede observar una lista de planificaciones existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en "Administración" en el panel "Opciones" para acceder.</li>
		</ul>
	</ul>
</div>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>

<?php $this->renderPartial('_updateForm', array('model'=>$model)); ?>