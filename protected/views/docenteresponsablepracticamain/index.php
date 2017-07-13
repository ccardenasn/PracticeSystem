<?php
/* @var $this DocenteresponsablepracticamainController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Docenteresponsablepracticamains',
);

$this->menu=array(
	array('label'=>'Create Docenteresponsablepracticamain', 'url'=>array('create')),
	array('label'=>'Manage Docenteresponsablepracticamain', 'url'=>array('admin')),
);
?>

<h1>Docenteresponsablepracticamains</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
