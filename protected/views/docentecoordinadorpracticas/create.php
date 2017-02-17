<?php
/* @var $this DocentecoordinadorpracticasController */
/* @var $model Docentecoordinadorpracticas */

$this->breadcrumbs=array(
	'Docente Coordinador de Practicas'=>array('index'),
	'Añadir',
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Añadir Docente Coordinador de Practicas</h1><br>

<ul>
	<h4>Instrucciones</h4>
	<li>Para regresar al índice de coordinadores haga click en la opción "Lista" situada en el panel de opciones ubicado al lado derecho de la ventana.</li>
	<li>Desde la sección "Administración" se puede observar una lista de coordinadores existentes, además permite realizar acciones tales como ver, modificar y eliminar datos. Haga click en "Administración" en el panel "Opciones" para acceder.</li>
</ul>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>