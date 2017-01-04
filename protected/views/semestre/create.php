<?php
/* @var $this SemestreController */
/* @var $model Semestre */

$this->breadcrumbs=array(
	'Semestres'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Semestre', 'url'=>array('index')),
	array('label'=>'Manage Semestre', 'url'=>array('admin')),
);
?>

<h1>Create Semestre</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>