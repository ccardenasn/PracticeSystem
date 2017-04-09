<?php
include_once('centro.php');
/* @var $this BitacorasesionController */
/* @var $model Bitacorasesion */

$this->breadcrumbs=array(
	'Bitacoras'=>array('index'),
	'Bitácora: Sesion Informada '.$model->planificacionClaseCodPlanificacion->SesionInformada,
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->CodBitacora)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CodBitacora),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administración', 'url'=>array('admin','id'=>$model->planificacionClaseCodPlanificacion->Estudiante_RutEstudiante)),
	array('label'=>'Planificaciones', 'url'=>array('planificacionclase/index')),
);
?>

<?php

$plandata=getPlanData($model->PlanificacionClase_CodPlanificacion);

?>

<h1>Datos Bitacora</h1>
<h2>Estudiante: <?php echo $model->planificacionClaseCodPlanificacion->estudianteRutEstudiante->NombreEstudiante ?> </h2>

<div class="collapse">
	<h3>Ayuda</h3>
	<ul>
		<ul>
			<h4>Instrucciones de Opciones</h4>
			<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
			<li>Para regresar al índice de bitácoras haga click en la opción "Lista".</li>
			<li>Haga click en "Actualizar" para modificar información de bitácora.</li>
			<li>Haga click en "Eliminar" para borrar toda la información de bitácora.</li>
			<li>Desde la sección "Administración" se puede observar una lista de bitácoras existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en "Administración" en el panel "Opciones" para acceder.</li>
			<li>Haga click en "Añadir Planificación" para configurar las sesiones de clases que realizará el estudiante seleccionado.</li>
			<li>Haga click en "Planificaciones" para acceder a la sección de planificaciones del estudiante seleccionado.</li>
		</ul>
	</ul>
</div><br>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'FechaBitacora',
		array('name'=>'Numero de Sesion','value'=>$model->planificacionClaseCodPlanificacion->SesionInformada),
		array('name'=>'Centro de Practica','value'=>$model->planificacionClaseCodPlanificacion->centroPracticaRBD->NombreCentroPractica),
		'ActividadesBitacora',
		'AprendizajeBitacora',
		'SentirBitacora',
		'OtroBitacora',
	),
)); ?>

<br/>
<h2>Clases </h2>

<table>
	<thead>
		<tr>
			<th>curso</th>
			<th>hora</th>
			<th>asignatura</th>
			<th>profesorguia</th>
			<th>numeroalumnos</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($model->clasebitacorasesions as $clase) : ?>
		<tr>
			<td><?php echo $clase->CursoClase ?></td>
			<td><?php echo $clase->HoraClase ?></td>
			<td><?php echo $clase->AsignaturaClase ?></td>
			<td><?php echo $clase->ProfesorGuiaClase ?></td>
			<td><?php echo $clase->NumeroAlumnosClase ?></td>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>