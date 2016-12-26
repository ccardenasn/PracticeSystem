<?php
/* @var $this SecretariacarreraController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Secretaria de Carrera',
);

$this->menu=array(
	array('label'=>'Añadir Secretaria de Carrera', 'url'=>array('create')),
	array('label'=>'Administrar Secretaria de Carrera', 'url'=>array('admin')),
);
?>

<h1>Secretaria de Carrera</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
