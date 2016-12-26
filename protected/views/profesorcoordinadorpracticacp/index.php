<?php
/* @var $this ProfesorcoordinadorpracticacpController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Profesor Coordinador de Practicas CP',
);

$this->menu=array(
	array('label'=>'Añadir Profesor Coordinador de Practicas CP', 'url'=>array('create')),
	array('label'=>'Administrar Profesor Coordinador de Practicas CP', 'url'=>array('admin')),
);
?>

<h1>Profesor Coordinador de Practicas CP</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
