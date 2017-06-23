<?php
/* @var $this PlanificacionclaseController */
/* @var $model Planificacionclase */

$this->pageTitle= Yii::app()->name." - "."Añadir";

$id=Yii::app()->user->name;

$this->breadcrumbs=array(
	'Planificaciones'=>array('index'),
	'Añadir',
);

$this->menu=array(
	array('label'=>'Planificaciones', 'url'=>array('index')),
	array('label'=>'Administración', 'url'=>array('admin','id'=>$id)),
);
?>

<h1>Añadir Planificación</h1><br>

<div class="collapse">
	<h3>Ayuda</h3>
	<ul align=justify>
		<ul>
			<h4>Instrucciones</h4>
			<li>Para regresar a la sección de planificaciones haga click en la opción <b>"Planificaciones"</b> situada en el panel de opciones ubicado al lado derecho de la ventana.</li>
			<li>Desde la sección <b>"Administración"</b> se puede observar una lista de planificaciones existentes, además permite realizar acciones tales como ver, modificar y eliminar datos. Haga click en <b>"Administración"</b> en el panel <b>"Opciones"</b> para acceder.</li>
		</ul>
	</ul>
</div>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>

<?php $this->renderPartial('_form', array('model'=>$model,'studentModel'=>$studentModel)); ?>