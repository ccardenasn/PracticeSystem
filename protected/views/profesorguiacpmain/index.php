<?php
/* @var $this ProfesorguiacpmainController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Profesorguiacps',
);

$this->menu=array(
	array('label'=>'Create Profesorguiacp', 'url'=>array('create')),
	array('label'=>'Manage Profesorguiacp', 'url'=>array('admin')),
);
?>

<h1>Profesorguiacps</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
