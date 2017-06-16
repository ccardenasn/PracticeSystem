<?php
/* @var $this ProfesorguiacpController */
/* @var $model Profesorguiacp */

$this->breadcrumbs=array(
	'Profesor Guia CP'=>array('index'),
	'Añadir',
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Añadir Profesor Guia CP</h1><br>
	
<div class="collapse">
	<h3>Ayuda</h3>
	<ul align=justify>
		<ul>
			<h4>Instrucciones</h4>
			<li>Para regresar al índice de profesores guía cp haga click en la opción "Lista" situada en el panel de opciones ubicado al lado derecho de la ventana.</li>
			<li>Desde la sección "Administración" se puede observar una lista de profesores guía cp existentes, además permite realizar acciones tales como ver, modificar y eliminar datos. Haga click en "Administración" en el panel "Opciones" para acceder.</li>
		</ul>
	</ul>
</div><br>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>