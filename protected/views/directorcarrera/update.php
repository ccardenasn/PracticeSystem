<?php
/* @var $this DirectorcarreraController */
/* @var $model Directorcarrera */

$this->breadcrumbs=array(
	'Director de Carrera'=>array('index'),
	$model->RutDirector=>array('view','id'=>$model->RutDirector),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Lista de Directores de Carrera', 'url'=>array('index')),
	array('label'=>'Añadir Director de Carrera', 'url'=>array('create')),
	array('label'=>'Ver Director de Carrera', 'url'=>array('view', 'id'=>$model->RutDirector)),
	array('label'=>'Administrar Director de Carrera', 'url'=>array('admin')),
);
?>

<h1>Modificar Director de Carrera <?php echo $model->RutDirector; ?></h1><br>

<ul>
	<h4>Instrucciones de Opciones</h4>
	<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
	<li>Para regresar al índice de directores haga click en "Lista".</li>
	<li>Haga click en "Añadir" para agregar un nuevo director a la lista.</li>
	<li>Haga click en "Detalles" para visualizar información de director.</li>
	<li>Desde la sección "Administración" se puede observar una lista de directores existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en "Administración" en el panel "Opciones" para acceder.</li>
</ul>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>