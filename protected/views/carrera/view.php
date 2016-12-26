<?php
/* @var $this CarreraController */
/* @var $model Carrera */

$this->breadcrumbs=array(
	'Carrera'=>array('index'),
	$model->codCarrera,
);

$this->menu=array(
	array('label'=>'Lista de Carreras', 'url'=>array('index')),
	array('label'=>'Añadir Carrera', 'url'=>array('create')),
	array('label'=>'Modificar Carrera', 'url'=>array('update', 'id'=>$model->codCarrera)),
	array('label'=>'Eliminar Carrera', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->codCarrera),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Carrera', 'url'=>array('admin')),
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
