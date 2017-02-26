<?php
/* @var $this CategoriadocumentosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Categoriadocumentoses',
);

$this->menu=array(
	array('label'=>'Create Categoriadocumentos', 'url'=>array('create')),
	array('label'=>'Manage Categoriadocumentos', 'url'=>array('admin')),
);
?>

<h1>Categoriadocumentoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
