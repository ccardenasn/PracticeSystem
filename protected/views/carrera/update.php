<?php
/* @var $this CarreraController */
/* @var $model Carrera */

$this->breadcrumbs=array(
	'Carreras'=>array('index'),
	$model->codCarrera=>array('view','id'=>$model->codCarrera),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Detalles', 'url'=>array('view', 'id'=>$model->codCarrera)),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Modificar Carrera <?php echo $model->codCarrera; ?></h1><br>

<ul>
	<h4>Instrucciones de Opciones</h4>
	<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
	<li>Para regresar al índice de carreras haga click en "Lista".</li>
	<li>Haga click en "Añadir" para agregar una nueva carrera a la lista.</li>
	<li>Haga click en "Detalles" para visualizar información de carrera.</li>
	<li>Desde la sección "Administración" se puede observar una lista de crreras existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en "Administración" en el panel "Opciones" para acceder.</li>
</ul>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>