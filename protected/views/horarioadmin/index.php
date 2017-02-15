<?php
/* @var $this HorarioadminController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Horarioadmins',
);

$this->menu=array(
	array('label'=>'Create Horarioadmin', 'url'=>array('create')),
	array('label'=>'Manage Horarioadmin', 'url'=>array('admin')),
);
?>

<h1>Horarioadmins</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
