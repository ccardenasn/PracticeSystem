<?php
/* @var $this CentropracticaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Centros de Practica',
);

$this->menu=array(
	array('label'=>'Añadir Centro de Practica', 'url'=>array('create')),
	array('label'=>'Administrar Centros de Practica', 'url'=>array('admin')),
);
?>

<h1>Centros de Practica</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
