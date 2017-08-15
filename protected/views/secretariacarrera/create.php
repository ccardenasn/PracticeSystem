<?php
/* @var $this SecretariacarreraController */
/* @var $model Secretariacarrera */

$this->pageTitle= Yii::app()->name." - "."Añadir";

$this->breadcrumbs=array(
	'Secretaria de Carrera'=>array('index'),
	'Añadir',
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Añadir Secretaria de Carrera</h1><br>

<div class="collapse">
	<h3>Ayuda</h3>
	<ul align=justify>
		<h4>Instrucciones</h4>
		<li>Para regresar al índice de funcionarios haga click en la opción <strong>"Lista"</strong> situada en el panel de opciones ubicado al lado derecho de la ventana.</li>
		<li>Desde la sección <strong>"Administración"</strong> se puede observar una lista de funcionarios existentes, además permite realizar acciones tales como ver, modificar y eliminar datos. Haga click en <strong>"Administración"</strong> en el panel <strong>"Opciones"</strong> para acceder.</li>
	</ul>
</div><br>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>