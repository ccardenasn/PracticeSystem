<?php
/* @var $this DocentecoordinadorpracticasloginController */
/* @var $model Docentecoordinadorpracticaslogin */

$this->breadcrumbs=array(
	'Docentecoordinadorpracticaslogins'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Docentecoordinadorpracticaslogin', 'url'=>array('index')),
	array('label'=>'Manage Docentecoordinadorpracticaslogin', 'url'=>array('admin')),
);
?>

<h1>Create Docentecoordinadorpracticaslogin</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>