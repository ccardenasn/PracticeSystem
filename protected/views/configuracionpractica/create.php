<?php
/* @var $this ConfiguracionpracticaController */
/* @var $model Configuracionpractica */

$this->breadcrumbs=array(
	'Configuración de Prácticas'=>array('index'),
	'Añadir',
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Añadir Práctica</h1><br>
	
<div class="collapse">
	<h3>Ayuda</h3>
	<ul>
		<ul>
			<h4>Instrucciones</h4>
			<li>Para regresar al índice de prácticas haga click en la opción "Lista" situada en el panel de opciones ubicado al lado derecho de la ventana.</li>
			<li>Desde la sección "Administración" se puede observar una lista de prácticas existentes, además permite realizar acciones tales como ver, modificar y eliminar datos. Haga click en "Administración" en el panel "Opciones" para acceder.</li>
		</ul>
	</ul>
</div><br>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>