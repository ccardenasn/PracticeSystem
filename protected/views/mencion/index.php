<?php
/* @var $this MencionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Menciones',
);

$this->menu=array(
	array('label'=>'Añadir Mencion', 'url'=>array('create')),
	array('label'=>'Administrar Mencion', 'url'=>array('admin')),
);
?>

<h1>Menciones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
