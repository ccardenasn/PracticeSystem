<?php
/* @var $this ProfesorcoordinadorpracticacpController */
/* @var $model Profesorcoordinadorpracticacp */

$this->breadcrumbs=array(
	'Profesor Coordinador de Practicas CP'=>array('index'),
	$model->RutProfCoordGuiaCp=>array('view','id'=>$model->RutProfCoordGuiaCp),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Detalles', 'url'=>array('view', 'id'=>$model->RutProfCoordGuiaCp)),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Modificar Profesor Coordinador de Practicas CP<?php echo $model->RutProfCoordGuiaCp; ?></h1><br>

<ul>
	<h4>Instrucciones de Opciones</h4>
	<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
	<li>Para regresar al índice de coordinadores cp haga click en "Lista".</li>
	<li>Haga click en "Añadir" para agregar un nuevo coordinador cp a la lista.</li>
	<li>Haga click en "Detalles" para visualizar información de coordinador cp.</li>
	<li>Desde la sección "Administración" se puede observar una lista de coordinadores cp existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en "Administración" en el panel "Opciones" para acceder.</li>
</ul>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>