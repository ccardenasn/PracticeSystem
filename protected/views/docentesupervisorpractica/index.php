<?php
/* @var $this DocentesupervisorpracticaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Docente Supervisor de Practicas',
);

$this->menu=array(
	array('label'=>'Añadir Supervisor', 'url'=>array('create')),
	array('label'=>'Adeministrar Supervisores', 'url'=>array('admin')),
);
?>

<h1>Docentes Supervisores de Practicas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
