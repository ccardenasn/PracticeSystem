<?php
/* @var $this PerfildirectorcarreraController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Perfildirectorcarreras',
);

$this->menu=array(
	array('label'=>'Create Perfildirectorcarrera', 'url'=>array('create')),
	array('label'=>'Manage Perfildirectorcarrera', 'url'=>array('admin')),
);
?>

<h1>Perfildirectorcarreras</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
