<?php
/* @var $this GraphDataController */
/* @var $model GraphData */

$this->breadcrumbs=array(
	'Graph Datas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List GraphData', 'url'=>array('index')),
	array('label'=>'Create GraphData', 'url'=>array('create')),
	array('label'=>'View GraphData', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage GraphData', 'url'=>array('admin')),
);
?>

<h1>Update GraphData <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>