<?php
include_once('centro.php');
/* @var $this CustomerController */
/* @var $model Customer */

$this->breadcrumbs=array(
	'Bitacoras'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Lista de Bitacoras', 'url'=>array('index')),
	array('label'=>'Modificar Bitacora', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Bitacora', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Bitacora', 'url'=>array('admin')),
	array('label'=>'Lista de Planificaciones', 'url'=>array('planificacionclase/index')),
	array('label'=>'Crear PDF', 'url'=>array('pdf','id'=>$model->id)),
	array('label'=>'Subir Documento Word', 'url'=>array('documentobitacora/create','id'=>$model->id)),
);
?>

<?php

$plandata=getPlanData($model->PlanificacionClase_CodPlanificacion);

?>

<h1>Datos Bitacora: </h1>
<h2>Estudiante: <?php echo $plandata[3]; ?> </h2>



<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'fecha',
		array('name'=>'Numero de Sesion','value'=>$plandata[0]),
		array('name'=>'Codigo de Planificacion','value'=>$model->PlanificacionClase_CodPlanificacion),
        array('name'=>'Centro de Practica','value'=>$plandata[1]),
		'actividades',
		'aprendizaje',
		'sentir',
		'otro',
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
		<?php foreach($model->clasebitacorasesion as $contact) : ?>
		<tr>
			<td><?php echo $contact->curso ?></td>
			<td><?php echo $contact->hora ?></td>
			<td><?php echo $contact->asignatura ?></td>
			<td><?php echo $contact->profesorguia ?></td>
			<td><?php echo $contact->numeroalumnos ?></td>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>