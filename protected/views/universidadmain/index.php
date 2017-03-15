<?php
/* @var $this UniversidadmainController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Universidads',
);

$this->menu=array(
	array('label'=>'Create Universidad', 'url'=>array('create')),
	array('label'=>'Manage Universidad', 'url'=>array('admin')),
);
?>

<h1>Universidads</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
