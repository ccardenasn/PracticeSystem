<?php
/* @var $this EstudianteresponsableController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Estudianteresponsables',
);

$this->menu=array(
	array('label'=>'Create Estudianteresponsable', 'url'=>array('create')),
	array('label'=>'Manage Estudianteresponsable', 'url'=>array('admin')),
);
?>

<h1>Estudianteresponsables</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
