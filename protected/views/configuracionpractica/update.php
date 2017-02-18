<?php
/* @var $this ConfiguracionpracticaController */
/* @var $model Configuracionpractica */

$this->breadcrumbs=array(
	'Configuración de Prácticas'=>array('index'),
	$model->NombrePractica=>array('view','id'=>$model->NombrePractica),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Detalles', 'url'=>array('view', 'id'=>$model->NombrePractica)),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Modificar Practica <?php echo $model->NombrePractica; ?></h1><br>

<ul>
	<h4>Instrucciones de Opciones</h4>
	<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
	<li>Para regresar al índice de prácticas haga click en "Lista".</li>
	<li>Haga click en "Añadir" para agregar una nueva práctica a la lista.</li>
	<li>Haga click en "Detalles" para visualizar información de práctica.</li>
	<li>Desde la sección "Administración" se puede observar una lista de prácticas existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en "Administración" en el panel "Opciones" para acceder.</li>
</ul>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>