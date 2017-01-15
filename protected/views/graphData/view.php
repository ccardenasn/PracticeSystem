<?php
/* @var $this GraphDataController */
/* @var $model GraphData */

$this->breadcrumbs=array(
	'Graph Datas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List GraphData', 'url'=>array('index')),
	array('label'=>'Create GraphData', 'url'=>array('create')),
	array('label'=>'Update GraphData', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete GraphData', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GraphData', 'url'=>array('admin')),
);
?>

<h1>View GraphData #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'numero',
		'nombrepractica',
		'idcentro',
	),
)); ?>
