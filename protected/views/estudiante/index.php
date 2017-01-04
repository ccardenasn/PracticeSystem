<?php
/* @var $this EstudianteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Estudiantes',
);

$this->menu=array(
	array('label'=>'Añadir Estudiante', 'url'=>array('create')),
	array('label'=>'Administrar Estudiantes', 'url'=>array('admin')),
	array('label'=>'Administrar Planificaciones', 'url'=>array('planificacionclaseadministrador/admin')),
);
?>

<h1>Estudiantes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>