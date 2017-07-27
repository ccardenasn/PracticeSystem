<?php
/* @var $this BitacorasesionresponsableController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bitacorasesionresponsables',
);

$this->menu=array(
	array('label'=>'Create Bitacorasesionresponsable', 'url'=>array('create')),
	array('label'=>'Manage Bitacorasesionresponsable', 'url'=>array('admin')),
);
?>

<h1>Bitacorasesionresponsables</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
