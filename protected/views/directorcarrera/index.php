<?php
/* @var $this DirectorcarreraController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Director de Carrera',
);

$this->menu=array(
	array('label'=>'Crear Director de Carrera', 'url'=>array('create')),
	array('label'=>'Administrar Director de Carrera', 'url'=>array('admin')),
);
?>

<h1>Director de Carrera</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
