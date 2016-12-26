<?php
/* @var $this SecretariacpController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Secretaria CP',
);

$this->menu=array(
	array('label'=>'Añadir Secretaria CP', 'url'=>array('create')),
	array('label'=>'Administrar Secretaria CP', 'url'=>array('admin')),
);
?>

<h1>Secretaria CP</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
