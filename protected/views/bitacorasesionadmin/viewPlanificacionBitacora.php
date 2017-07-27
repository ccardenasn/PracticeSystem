<?php
/* @var $this BitacorasesionController */
/* @var $model Bitacorasesion */

$this->pageTitle= Yii::app()->name." - "."Detalles";

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
	<ul align=justify>
		<ul>
			<h4>Instrucciones de Opciones</h4>
			<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
			<li>Para regresar al índice de bitácoras haga click en la opción <strong>"Lista"</strong>.</li>
			<li>Haga click en <strong>"Editar"</strong> para modificar información de bitácora.</li>
			<li>Haga click en <strong>"Eliminar"</strong> para borrar toda la información de bitácora.</li>
			<li>Desde la sección <strong>"Administración"</strong> se puede observar una lista de bitácoras existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en <strong>"Administración"</strong> en el panel <strong>"Opciones"</strong> para acceder.</li>
			<li>Haga click en <strong>"Añadir Planificación"</strong> para configurar las sesiones de clases que realizará el estudiante seleccionado.</li>
			<li>Haga click en <strong>"Planificaciones de Estudiante"</strong> para acceder a un listado de planificaciones del estudiante seleccionado.</li>
			<li>Haga click en <strong>"Crear PDF"</strong> para generar un documento en formato pdf con información correspondiente a la bitácora.</li>
		</ul>
	</ul>
</div>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
    'cssFile' => Yii::app()->baseUrl .'/css/detailview/styles.css',
	'attributes'=>array(
        'planificacionClaseCodPlanificacion.Fecha',
        'planificacionClaseCodPlanificacion.SesionInformada',
        'planificacionClaseCodPlanificacion.centroPracticaRBD.NombreCentroPractica',
		'ActividadesBitacora',
		'AprendizajeBitacora',
		'SentirBitacora',
		'OtroBitacora',
        array(
            'name'=>'DocumentoBitacora (click en el enlace)',
			'type' => 'raw',
            'value'=>CHtml::link(CHtml::encode($model->DocumentoBitacora), Yii::app()->baseUrl .'/documentsFiles/bitacoraDocuments/'.$model->DocumentoBitacora,array('target'=>'_blank'))
            ),
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