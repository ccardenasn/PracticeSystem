<?php
/* @var $this HorarioAdminController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Horario Admins',
);

$this->menu=array(
	array('label'=>'Create HorarioAdmin', 'url'=>array('create')),
	array('label'=>'Manage HorarioAdmin', 'url'=>array('admin')),
);
?>

<h1>Horario Admins</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
