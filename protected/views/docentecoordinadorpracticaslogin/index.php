<?php
/* @var $this DocentecoordinadorpracticasloginController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Docentecoordinadorpracticaslogins',
);

$this->menu=array(
	array('label'=>'Create Docentecoordinadorpracticaslogin', 'url'=>array('create')),
	array('label'=>'Manage Docentecoordinadorpracticaslogin', 'url'=>array('admin')),
);
?>

<h1>Docentecoordinadorpracticaslogins</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
