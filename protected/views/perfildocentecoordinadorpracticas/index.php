<?php
/* @var $this PerfildocentecoordinadorpracticasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Perfildocentecoordinadorpracticases',
);

$this->menu=array(
	array('label'=>'Create Perfildocentecoordinadorpracticas', 'url'=>array('create')),
	array('label'=>'Manage Perfildocentecoordinadorpracticas', 'url'=>array('admin')),
);
?>

<h1>Perfildocentecoordinadorpracticases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
