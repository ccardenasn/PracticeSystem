<?php
/* @var $this ConfiguracionpracticaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Configuracion de Practicas',
);

$this->menu=array(
	array('label'=>'Añadir Practica', 'url'=>array('create')),
	array('label'=>'Administrar Practicas', 'url'=>array('admin')),
);
?>

<h1>Configuracion de Practicas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
