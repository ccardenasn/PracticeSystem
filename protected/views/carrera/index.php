<?php
/* @var $this CarreraController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Carrera',
);

$this->menu=array(
	array('label'=>'Añadir Carrera', 'url'=>array('create')),
	array('label'=>'Administrar Carrera', 'url'=>array('admin')),
);
?>

<h1>Carrera</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
