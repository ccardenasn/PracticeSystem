<?php
/* @var $this ConfiguracionpracticaController */
/* @var $model Configuracionpractica */

$this->pageTitle= Yii::app()->name." - "."Añadir";

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
	<ul align=justify>
		<ul>
			<h4>Instrucciones</h4>
			<li>Para regresar al índice de prácticas haga click en la opción <b>"Lista"</b> situada en el panel de opciones ubicado al lado derecho de la ventana.</li>
			<li>Desde la sección <b>"Administración"</b> se puede observar una lista de prácticas existentes, además permite realizar acciones tales como ver, modificar y eliminar datos. Haga click en <b>"Administración"</b> en el panel <b>"Opciones"</b> para acceder.</li>
		</ul>
	</ul>
</div><br>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>