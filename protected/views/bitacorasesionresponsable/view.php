<?php
/* @var $this BitacorasesionresponsableController */
/* @var $model Bitacorasesionresponsable */

$this->pageTitle= Yii::app()->name." - "."Detalles";

$this->breadcrumbs=array(
	'Bitácoras'=>array('index'),
	'Bitácora: Sesion Informada '.$model->planificacionClaseCodPlanificacion->SesionInformada,
);

$this->menu=array(
	array('label'=>'Planificaciones', 'url'=>array('planificacionclaseresponsable/index')),
	array('label'=>'Crear PDF', 'url'=>array('pdf','id'=>$model->PlanificacionClase_CodPlanificacion)),
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
			<li>Haga click en <strong>"Planificaciones"</strong> para acceder a la sección de planificaciones.</li>
			<li>Haga click en <strong>"Crear PDF"</strong> para generar un documento en formato pdf con información correspondiente a la bitácora.</li>
		</ul>
	</ul>
</div>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
    'cssFile' => Yii::app()->baseUrl .'/css/detailview/styles.css',
	'attributes'=>array(
		//'CodBitacora',
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
		//'PlanificacionClase_CodPlanificacion',
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
