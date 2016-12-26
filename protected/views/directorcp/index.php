<?php
/* @var $this DirectorcpController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Director CP',
);

$this->menu=array(
	array('label'=>'Añadir Director CP', 'url'=>array('create')),
	array('label'=>'Administrar Directores CP', 'url'=>array('admin')),
);
?>

<h1>Director CP</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
