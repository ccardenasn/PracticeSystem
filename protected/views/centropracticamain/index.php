<?php
/* @var $this CentropracticamainController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Centropracticas',
);

$this->menu=array(
	array('label'=>'Create Centropractica', 'url'=>array('create')),
	array('label'=>'Manage Centropractica', 'url'=>array('admin')),
);
?>

<h1>Centropracticas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
