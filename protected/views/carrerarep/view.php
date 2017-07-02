<?php
/* @var $this CarrerarepController */
/* @var $model Carrerarep */

$this->breadcrumbs=array(
	'Carrerareps'=>array('index'),
	$model->codCarrera,
);

$this->menu=array(
	array('label'=>'List Carrerarep', 'url'=>array('index')),
	array('label'=>'Create Carrerarep', 'url'=>array('create')),
	array('label'=>'Update Carrerarep', 'url'=>array('update', 'id'=>$model->codCarrera)),
	array('label'=>'Delete Carrerarep', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->codCarrera),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Carrerarep', 'url'=>array('admin')),
);
?>

<h1>View Carrerarep #<?php echo $model->codCarrera; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'codCarrera',
		'NombreCarrera',
		'SemestresCarrera',
		'Universidad_CodInstitucion',
	),
)); ?>
