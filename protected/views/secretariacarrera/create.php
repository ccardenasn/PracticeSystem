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

<ul align=justify>
	<h4>Instrucciones</h4>
	<li>Para regresar al índice de funcionarios haga click en la opción <b>"Lista"</b> situada en el panel de opciones ubicado al lado derecho de la ventana.</li>
	<li>Desde la sección <b>"Administración"</b> se puede observar una lista de funcionarios existentes, además permite realizar acciones tales como ver, modificar y eliminar datos. Haga click en <b>"Administración"</b> en el panel <b>"Opciones"</b> para acceder.</li>
</ul>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>