<?php
/* @var $this BitacorasesionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bitacorasesions',
);

$this->menu=array(
	array('label'=>'Create Bitacorasesion', 'url'=>array('create')),
	array('label'=>'Manage Bitacorasesion', 'url'=>array('admin')),
);
?>

<h1>Bitacorasesions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
