<?php
/* @var $this DocenteresponsablepracticaloginController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Docenteresponsablepracticalogins',
);

$this->menu=array(
	array('label'=>'Create Docenteresponsablepracticalogin', 'url'=>array('create')),
	array('label'=>'Manage Docenteresponsablepracticalogin', 'url'=>array('admin')),
);
?>

<h1>Docenteresponsablepracticalogins</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
