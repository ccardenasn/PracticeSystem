<?php
/* @var $this EstudiantemainController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Estudiantemains',
);

$this->menu=array(
	array('label'=>'Create Estudiantemain', 'url'=>array('create')),
	array('label'=>'Manage Estudiantemain', 'url'=>array('admin')),
);
?>

<h1>Estudiantemains</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
