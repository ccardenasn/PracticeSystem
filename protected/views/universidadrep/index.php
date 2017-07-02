<?php
/* @var $this UniversidadrepController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Universidadreps',
);

$this->menu=array(
	array('label'=>'Create Universidadrep', 'url'=>array('create')),
	array('label'=>'Manage Universidadrep', 'url'=>array('admin')),
);
?>

<h1>Universidadreps</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
