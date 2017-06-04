<?php
/* @var $this BitacorasesionController */
/* @var $model Bitacorasesion */

$this->breadcrumbs=array(
	'Bitácoras'=>array('index'),
	'Bitácora: Sesion Informada '.$model->planificacionClaseCodPlanificacion->SesionInformada,
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Editar', 'url'=>array('update', 'id'=>$model->CodBitacora)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CodBitacora),'confirm'=>'¿Está seguro de querer eliminar este elemento?')),
	array('label'=>'Administración', 'url'=>array('admin')),
	array('label'=>'Planificaciones de Estudiante', 'url'=>array('planificacionclaseadministrador/index')),
	array('label'=>'Crear PDF', 'url'=>array('pdf','id'=>$model->CodBitacora)),
);
?>

<h1>Datos Bitácora: <?php echo 'Sesión Informada '.$model->planificacionClaseCodPlanificacion->SesionInformada ?></h1>
<h2>Estudiante: <?php echo $model->planificacionClaseCodPlanificacion->estudianteRutEstudiante->NombreEstudiante; ?> </h2>

<div class="collapse">
	<h3>Ayuda</h3>
	<ul>
		<ul>
			<h4>Instrucciones de Opciones</h4>
			<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
			<li>Para regresar al índice de bitácoras haga click en la opción <b>"Lista"</b>.</li>
			<li>Haga click en <b>"Actualizar"</b> para modificar información de bitácora.</li>
			<li>Haga click en <b>"Eliminar"</b> para borrar toda la información de bitácora.</li>
			<li>Desde la sección <b>"Administración"</b> se puede observar una lista de bitácoras existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en <b>"Administración"</b> en el panel <b>"Opciones"</b> para acceder.</li>
			<li>Haga click en <b>"Añadir Planificación"</b> para configurar las sesiones de clases que realizará el estudiante seleccionado.</li>
			<li>Haga click en <b>"Planificaciones de Estudiante"</b> para acceder a un listado de planificaciones del estudiante seleccionado.</li>
			<li>Haga click en <b>"Crear PDF"</b> para generar un documento en formato pdf con información correspondiente a la bitácora.</li>
		</ul>
	</ul>
</div>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'FechaBitacora',
        'planificacionClaseCodPlanificacion.SesionInformada',
        'planificacionClaseCodPlanificacion.centroPracticaRBD.NombreCentroPractica',
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
			<th>Curso</th>
			<th>Hora</th>
			<th>Asignatura</th>
			<th>Profesor Guía</th>
			<th>Numero de Alumnos</th>
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