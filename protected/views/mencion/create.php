<?php
/* @var $this MencionController */
/* @var $model Mencion */

$this->breadcrumbs=array(
	'Menciones'=>array('index'),
	'Añadir',
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Añadir Mención</h1><br>

<ul>
	<h4>Instrucciones</h4>
	<li>Para regresar al índice de menciones haga click en la opción "Lista" situada en el panel de opciones ubicado al lado derecho de la ventana.</li>
	<li>Desde la sección "Administración" se puede observar una lista de las menciones existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en "Administración" en el panel "Opciones" para acceder.</li>
</ul>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>