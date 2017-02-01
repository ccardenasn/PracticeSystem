<?php
/* @var $this BloqueController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bloques',
);

$this->menu=array(
	array('label'=>'Create Bloque', 'url'=>array('create')),
	array('label'=>'Manage Bloque', 'url'=>array('admin')),
	array('label'=>'bacth update', 'url'=>array('batchUpdate')),
);
?>

<h1>Bloques</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
