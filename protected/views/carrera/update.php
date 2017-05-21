<?php
/* @var $this CarreraController */
/* @var $model Carrera */

$this->breadcrumbs=array(
	'Carrera'=>array('index'),
	$model->codCarrera=>array('view','id'=>$model->codCarrera),
	'Editar',
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Detalles', 'url'=>array('view', 'id'=>$model->codCarrera)),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Modificar Carrera: <?php echo $model->NombreCarrera; ?></h1><br>

<div class="collapse">
	<h3>Ayuda</h3>
	<ul>
		<ul>
            <h4>Instrucciones de Opciones</h4>
            <li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li><li>Para regresar al índice de carrera haga click en <strong>"Lista"</strong>.</li>
            <li>Haga click en <strong>"Añadir"</strong> para agregar una carrera a la lista.</li>
            <li>Haga click en <strong>"Detalles"</strong> para visualizar información de carrera.</li>
            <li>Desde la sección <strong>"Administración"</strong> se puede observar una lista de carrera, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en <strong>"Administración"</strong> en el panel <strong>"Opciones"</strong> para acceder.</li>
        </ul>
	</ul>
</div><br>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>