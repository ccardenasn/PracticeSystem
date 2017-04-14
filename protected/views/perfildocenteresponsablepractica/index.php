<?php
/* @var $this PerfildocenteresponsablepracticaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Perfildocenteresponsablepracticas',
);

$this->menu=array(
	array('label'=>'Create Perfildocenteresponsablepractica', 'url'=>array('create')),
	array('label'=>'Manage Perfildocenteresponsablepractica', 'url'=>array('admin')),
);
?>

<h1>Perfildocenteresponsablepracticas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
