<?php
/* @var $this SemestremainController */
/* @var $model Semestremain */

$this->breadcrumbs=array(
	'Semestremains'=>array('index'),
	$model->CodSemestre=>array('view','id'=>$model->CodSemestre),
	'Update',
);

$this->menu=array(
	array('label'=>'List Semestremain', 'url'=>array('index')),
	array('label'=>'Create Semestremain', 'url'=>array('create')),
	array('label'=>'View Semestremain', 'url'=>array('view', 'id'=>$model->CodSemestre)),
	array('label'=>'Manage Semestremain', 'url'=>array('admin')),
);
?>

<h1>Update Semestremain <?php echo $model->CodSemestre; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>