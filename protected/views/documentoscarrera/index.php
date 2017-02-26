<?php
/* @var $this DocumentoscarreraController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Documentoscarreras',
);

$this->menu=array(
	array('label'=>'Create Documentoscarrera', 'url'=>array('create')),
	array('label'=>'Manage Documentoscarrera', 'url'=>array('admin')),
);
?>

<h1>Documentoscarreras</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
