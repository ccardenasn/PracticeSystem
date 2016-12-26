<?php
/* @var $this BitacoraController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bitacoras',
);

$this->menu=array(
	array('label'=>'Create Bitacora', 'url'=>array('create')),
	array('label'=>'Manage Bitacora', 'url'=>array('admin')),
);
?>

<h1>Bitacoras</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
