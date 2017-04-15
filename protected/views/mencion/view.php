<?php
/* @var $this MencionController */
/* @var $model Mencion */

$this->breadcrumbs=array(
	'Menciones'=>array('index'),
	$model->NombreMencion,
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->NombreMencion)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->NombreMencion),'confirm'=>'¿Esta seguro de querer borrar este elemento?')),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Mención: <?php echo $model->NombreMencion; ?></h1><br>

<ul>
	<li>En esta sección se pueden visualizar todos los detalles de la mención seleccionada.</li>
</ul>

<ul>
	<h4>Instrucciones de Opciones</h4>
	<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
	<li>Haga click en <b>"Añadir"</b> para agregar una nueva mención a la lista.</li>
	<li>Haga click en <b>"Actualizar"</b> para modificar información de la mención.</li>
	<li>Haga click en <b>"Eliminar"</b> para borrar toda la información de la mención.</li>
	<li>Desde la sección <b>"Administración"</b> se puede observar una lista de las menciones existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en <b>"Administración"</b> en el panel <b>"Opciones"</b> para acceder.</li>
	<li>Para regresar al índice de menciones haga click en <b>"Lista"</b>.</li>
</ul>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'NombreMencion',
	),
)); ?>
