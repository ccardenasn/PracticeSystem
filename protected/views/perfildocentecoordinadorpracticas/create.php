<?php
/* @var $this PerfildocentecoordinadorpracticasController */
/* @var $model Perfildocentecoordinadorpracticas */

$this->breadcrumbs=array(
	'Perfildocentecoordinadorpracticases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Perfildocentecoordinadorpracticas', 'url'=>array('index')),
	array('label'=>'Manage Perfildocentecoordinadorpracticas', 'url'=>array('admin')),
);
?>

<h1>Create Perfildocentecoordinadorpracticas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>