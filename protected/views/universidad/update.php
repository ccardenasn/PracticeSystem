<?php
/* @var $this UniversidadController */
/* @var $model Universidad */

$this->breadcrumbs=array(
	'Universidad'=>array('index'),
	$model->NombreInstitucion=>array('view','id'=>$model->NombreInstitucion),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Detalles', 'url'=>array('view', 'id'=>$model->NombreInstitucion)),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Modificar Universidad <?php echo $model->NombreInstitucion; ?></h1><br>

<ul align=justify>
	<h4>Instrucciones de Opciones</h4>
	<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
	<li>Para regresar al índice de universidades haga click en "Lista".</li>
	<li>Haga click en "Añadir" para agregar universidad a la lista.</li>
	<li>Haga click en "Detalles" para visualizar información de universidad.</li>
	<li>Desde la sección "Administración" se puede observar una lista de universidades existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en "Administración" en el panel "Opciones" para acceder.</li>
</ul>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>