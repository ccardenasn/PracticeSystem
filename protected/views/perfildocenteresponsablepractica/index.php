<?php
/* @var $this DocenteresponsablepracticaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Docentes Responsables de Practicas',
);

$this->menu=array(
	array('label'=>'Añadir Docente Responsable de Practicas', 'url'=>array('create')),
	array('label'=>'Administrar Docentes Responsables de Practicas', 'url'=>array('admin')),
);
?>

<h1>Docentes Responsables de Practicas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
