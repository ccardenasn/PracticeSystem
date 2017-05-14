<?php
/* @var $this SemestremainController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Semestremains',
);

$this->menu=array(
	array('label'=>'Create Semestremain', 'url'=>array('create')),
	array('label'=>'Manage Semestremain', 'url'=>array('admin')),
);
?>

<h1>Semestremains</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
