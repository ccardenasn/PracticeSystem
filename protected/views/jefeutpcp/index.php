<?php
/* @var $this JefeutpcpController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jefe UTP CP',
);

$this->menu=array(
	array('label'=>'Añadir Jefe UTP CP', 'url'=>array('create')),
	array('label'=>'Administrar Jefe UTP CP', 'url'=>array('admin')),
);
?>

<h1>Jefes UTP CP</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
