<?php
/* @var $this MencionmainController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mencionmains',
);

$this->menu=array(
	array('label'=>'Create Mencionmain', 'url'=>array('create')),
	array('label'=>'Manage Mencionmain', 'url'=>array('admin')),
);
?>

<h1>Mencionmains</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
