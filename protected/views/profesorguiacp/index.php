<?php
/* @var $this ProfesorguiacpController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Profesor Guia CP',
);

$this->menu=array(
	array('label'=>'Añadir Profesor Guia CP', 'url'=>array('create')),
	array('label'=>'Administrar Profesor Guia CP', 'url'=>array('admin')),
);
?>

<h1>Profesor Guia CP</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
