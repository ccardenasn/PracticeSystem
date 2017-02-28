<?php
/* @var $this AsignaturaController */
/* @var $model Asignatura */

$this->breadcrumbs=array(
	'Asignaturas'=>array('index'),
	$model->NombreAsignatura,
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Modificar', 'url'=>array('update', 'id'=>$model->NombreAsignatura)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->NombreAsignatura),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Asignatura: <?php echo $model->NombreAsignatura; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'NombreAsignatura',
		'Semestre_CodSemestre',
	),
)); ?>

<br>
<br>
<ul>
	<h4>Instrucciones de Opciones</h4>
	<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
	<li>Haga click en "Añadir" para agregar una nueva asignatura a la lista.</li>
	<li>Haga click en "Actualizar" para modificar información de asignatura.</li>
	<li>Haga click en "Eliminar" para borrar toda la información de asignatura.</li>
	<li>Desde la sección "Administración" se puede observar una lista de asignaturas existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en "Administración" en el panel "Opciones" para acceder.</li>
	<li>Para regresar al índice de asignaturas haga click en "Lista".</li>
</ul><br>
