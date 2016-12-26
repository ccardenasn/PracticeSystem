<?php
/* @var $this UniversidadController */
/* @var $model Universidad */

$this->breadcrumbs=array(
	'Universidad'=>array('index'),
	$model->NombreInstitucion,
);

$this->menu=array(
	array('label'=>'Lista Universidad', 'url'=>array('index')),
	array('label'=>'Añadir Universidad', 'url'=>array('create')),
	array('label'=>'Modificar Universidad', 'url'=>array('update', 'id'=>$model->NombreInstitucion)),
	array('label'=>'Eliminar Universidad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->NombreInstitucion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Universidad', 'url'=>array('admin')),
);
?>

<h1>Institucion: <?php echo $model->NombreInstitucion; ?></h1>

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
