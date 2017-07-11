<?php
/* @var $this DirectorcarreraloginController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Directorcarreralogins',
);

$this->menu=array(
	array('label'=>'Create Directorcarreralogin', 'url'=>array('create')),
	array('label'=>'Manage Directorcarreralogin', 'url'=>array('admin')),
);
?>

<h1>Directorcarreralogins</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
