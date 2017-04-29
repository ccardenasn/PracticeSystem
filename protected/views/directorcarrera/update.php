<?php
/* @var $this DirectorcarreraController */
/* @var $model Directorcarrera */

$this->breadcrumbs=array(
	'Director de Carrera'=>array('index'),
	$model->RutDirector=>array('view','id'=>$model->RutDirector),
	'Editar',
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Detalles', 'url'=>array('view', 'id'=>$model->RutDirector)),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Modificar Director de Carrera: <?php echo $model->NombreDirector; ?></h1><br>

<div class="collapse">
	<h3>Ayuda</h3>
	<ul>
		<ul>
			<h4>Instrucciones de Opciones</h4>
			<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
			<li>Para regresar al índice de directores haga click en <strong>"Lista"</strong>.</li>
			<li>Haga click en <strong>"Añadir"</strong> para agregar un nuevo director a la lista.</li>
			<li>Haga click en<strong>"Detalles"</strong> para visualizar información de director.</li>
			<li>Desde la sección <strong>"Administración"</strong> se puede observar una lista de directores existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en <strong>"Administración"</strong> en el panel <strong>"Opciones"</strong> para acceder.</li>
		</ul>
	</ul>
</div><br>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>