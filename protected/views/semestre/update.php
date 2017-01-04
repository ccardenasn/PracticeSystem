<?php
/* @var $this SemestreController */
/* @var $model Semestre */

$this->breadcrumbs=array(
	'Semestres'=>array('index'),
	$model->CodSemestre=>array('view','id'=>$model->CodSemestre),
	'Update',
);

$this->menu=array(
	array('label'=>'List Semestre', 'url'=>array('index')),
	array('label'=>'Create Semestre', 'url'=>array('create')),
	array('label'=>'View Semestre', 'url'=>array('view', 'id'=>$model->CodSemestre)),
	array('label'=>'Manage Semestre', 'url'=>array('admin')),
);
?>

<h1>Update Semestre <?php echo $model->CodSemestre; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>