<?php
/* @var $this GraphDataController */
/* @var $model GraphData */

$this->breadcrumbs=array(
	'Graph Datas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GraphData', 'url'=>array('index')),
	array('label'=>'Manage GraphData', 'url'=>array('admin')),
);
?>

<h1>Create GraphData</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>