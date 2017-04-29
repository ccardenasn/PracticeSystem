<?php
/* @var $this NiveleducacionalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Niveleducacionals',
);

$this->menu=array(
	array('label'=>'Create Niveleducacional', 'url'=>array('create')),
	array('label'=>'Manage Niveleducacional', 'url'=>array('admin')),
);
?>

<h1>Niveleducacionals</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
