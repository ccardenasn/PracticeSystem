<?php
/* @var $this EstudianteloginController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Estudiantelogins',
);

$this->menu=array(
	array('label'=>'Create Estudiantelogin', 'url'=>array('create')),
	array('label'=>'Manage Estudiantelogin', 'url'=>array('admin')),
);
?>

<h1>Estudiantelogins</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
