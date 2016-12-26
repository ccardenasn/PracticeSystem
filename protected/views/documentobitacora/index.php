<?php
/* @var $this DocumentobitacoraController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Documentobitacoras',
);

$this->menu=array(
	array('label'=>'Create Documentobitacora', 'url'=>array('create')),
	array('label'=>'Manage Documentobitacora', 'url'=>array('admin')),
);
?>

<h1>Documentobitacoras</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
