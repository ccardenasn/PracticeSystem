<?php
/* @var $this UniversidadController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Universidad',
);

$this->menu=array(
	array('label'=>'Añadir Universidad', 'url'=>array('create')),
	array('label'=>'Administrar Universidad', 'url'=>array('admin')),
);
?>

<h1>Universidad</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
