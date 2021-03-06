<?php
/* @var $this DependenciaController */
/* @var $model Dependencia */

$this->pageTitle= Yii::app()->name." - "."Editar";

$this->breadcrumbs=array(
	'Dependencias'=>array('index'),
	$model->NombreDependencia=>array('view','id'=>$model->CodDependencia),
	'Editar',
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Detalles', 'url'=>array('view', 'id'=>$model->CodDependencia)),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Modificar Dependencia: <?php echo $model->NombreDependencia; ?></h1><br>

<div class="collapse">
	<h3>Ayuda</h3>
	<ul align=justify>
		<ul>
			<h4>Instrucciones de Opciones</h4>
			<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
			<li>Para regresar al índice con dependencias haga click en <b>"Lista"</b>.</li>
			<li>Haga click en <b>"Añadir"</b> para agregar una nueva dependencia a la lista.</li>
			<li>Haga click en <b>"Detalles"</b> para visualizar información correspondiente a dependencia.</li>
			<li>Desde la sección <b>"Administración"</b> se puede observar una lista con dependencias existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en <b>"Administración"</b> en el panel <b>"Opciones"</b> para acceder.</li>
		</ul>
	</ul>
</div><br>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>