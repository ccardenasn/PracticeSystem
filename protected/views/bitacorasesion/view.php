<?php
/* @var $this BitacorasesionController */
/* @var $model Bitacorasesion */

$this->pageTitle= Yii::app()->name." - "."Detalles";

$this->breadcrumbs=array(
	'Bitacoras'=>array('index'),
	'Bitácora: Sesion Informada '.$model->planificacionClaseCodPlanificacion->SesionInformada,
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Editar', 'url'=>array('update', 'id'=>$model->CodBitacora)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CodBitacora),'confirm'=>'¿Está seguro de querer eliminar este elemento?')),
	array('label'=>'Administración', 'url'=>array('admin','id'=>$model->planificacionClaseCodPlanificacion->Estudiante_RutEstudiante)),
	array('label'=>'Planificaciones', 'url'=>array('planificacionclase/index')),
);
?>

<h1>Datos Bitácora</h1>
<h2>Estudiante: <?php echo $model->planificacionClaseCodPlanificacion->estudianteRutEstudiante->NombreEstudiante ?> </h2><br>

<div class="collapse">
	<h3>Ayuda</h3>
	<ul align=justify>
		<ul>
			<h4>Instrucciones de Opciones</h4>
			<li>Para regresar al índice de bitácoras haga click en <strong>"Lista"</strong>.</li>
			<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
			<li>Haga click en <strong>"Editar"</strong> para modificar información de bitácora.</li>
			<li>Haga click en <strong>"Eliminar"</strong> para borrar toda la información de bitácora.</li>
			<li>Desde la sección <strong>"Administración"</strong> se puede observar una lista de bitácoras existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en <strong>"Administración"</strong> en el panel <strong>"Opciones"</strong> para acceder.</li>
			<li>Haga click en <strong>"Planificaciones"</strong> para acceder a información correspondiente a las planificaciones de clases de estudiante.</li>
		</ul>
	</ul>
</div><br>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'planificacionClaseCodPlanificacion.Fecha',
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
			<th>Número de Alumnos</th>
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