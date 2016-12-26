<?php
/* @var $this DocentecoordinadorpracticasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Docente Coordinador de Practicas',
);

$this->menu=array(
	array('label'=>'Añadir Docente Coordinador de Practicas', 'url'=>array('create')),
	array('label'=>'Administrar Docente Coordinador de Practicas', 'url'=>array('admin')),
);
?>

<h1>Docente Coordinador de Practicas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
