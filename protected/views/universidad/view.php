<?php
/* @var $this UniversidadController */
/* @var $model Universidad */

$this->breadcrumbs=array(
	'Universidad'=>array('index'),
	$model->NombreInstitucion,
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->NombreInstitucion)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->NombreInstitucion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Institución: <?php echo $model->NombreInstitucion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'NombreInstitucion',
		'Sede',
		'Campus',
		'Facultad',
		array('name'=>'Region','value'=>$model->regionCodRegion->NombreRegion),
        array('name'=>'Provincia','value'=>$model->provinciaCodProvincia->NombreProvincia),
        array('name'=>'Ciudad','value'=>$model->ciudadCodCiudad->NombreCiudad),
	),
)); ?>
