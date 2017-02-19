<?php
/* @var $this CarreraController */
/* @var $model Carrera */

$this->breadcrumbs=array(
	'Carrera'=>array('index'),
	$model->codCarrera,
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->codCarrera)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->codCarrera),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Carrera: <?php echo $model->NombreCarrera; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'codCarrera',
		'NombreCarrera',
		'Sede',
		array('name'=>'Region','value'=>$model->regionCodRegion->NombreRegion),
        array('name'=>'Provincia','value'=>$model->provinciaCodProvincia->NombreProvincia),
        array('name'=>'Ciudad','value'=>$model->ciudadCodCiudad->NombreCiudad),
	),
)); ?>

<br>
<br>
<ul>
	<h4>Instrucciones de Opciones</h4>
	<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
	<li>Haga click en "Añadir" para agregar una nueva carrera a la lista.</li>
	<li>Haga click en "Actualizar" para modificar información de carrera.</li>
	<li>Haga click en "Eliminar" para borrar toda la información de carrera.</li>
	<li>Desde la sección "Administración" se puede observar una lista de carreras existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en "Administración" en el panel "Opciones" para acceder.</li>
	<li>Para regresar al índice de carreras haga click en "Lista".</li>
</ul><br>