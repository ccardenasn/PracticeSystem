<?php
/* @var $this CarrerarepController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Carrerareps',
);

$this->menu=array(
	array('label'=>'Create Carrerarep', 'url'=>array('create')),
	array('label'=>'Manage Carrerarep', 'url'=>array('admin')),
);
?>

<h1>Carrerareps</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
