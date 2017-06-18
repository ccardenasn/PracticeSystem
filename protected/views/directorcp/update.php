<?php
/* @var $this DirectorcpController */
/* @var $model Directorcp */

$this->breadcrumbs=array(
	'Director CP'=>array('index'),
	$model->RutDirectorCP=>array('view','id'=>$model->RutDirectorCP),
	'Editar',
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Detalles', 'url'=>array('view', 'id'=>$model->RutDirectorCP)),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Modificar Director CP: <?php echo $model->NombreDirectorCP; ?></h1><br>
	
<div class="collapse">
	<h3>Ayuda</h3>
	<ul align=justify>
		<ul>
			<h4>Instrucciones de Opciones</h4>
			<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
			<li>Para regresar al índice de directores cp haga click en <strong>"Lista"</strong>.</li>
			<li>Haga click en <strong>"Añadir"</strong> para agregar un nuevo director cp a la lista.</li>
			<li>Haga click en <strong>"Detalles"</strong> para visualizar información de director cp.</li>
			<li>Desde la sección <strong>"Administración"</strong> se puede observar una lista de directores cp existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en <strong>"Administración"</strong> en el panel <strong>"Opciones"</strong> para acceder.</li>
		</ul>
	</ul>
</div><br>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>