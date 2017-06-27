<?php
/* @var $this EstudiantemainController */
/* @var $model Estudiantemain */

$this->breadcrumbs=array(
	'Estudiantemains'=>array('index'),
	$model->RutEstudiante=>array('view','id'=>$model->RutEstudiante),
	'Update',
);

$this->menu=array(
	array('label'=>'List Estudiantemain', 'url'=>array('index')),
	array('label'=>'Create Estudiantemain', 'url'=>array('create')),
	array('label'=>'View Estudiantemain', 'url'=>array('view', 'id'=>$model->RutEstudiante)),
	array('label'=>'Manage Estudiantemain', 'url'=>array('admin')),
);
?>

<h1>Update Estudiantemain <?php echo $model->RutEstudiante; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>