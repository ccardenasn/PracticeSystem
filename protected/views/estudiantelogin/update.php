<?php
/* @var $this EstudianteloginController */
/* @var $model Estudiantelogin */

$this->breadcrumbs=array(
	'Estudiantelogins'=>array('index'),
	$model->RutEstudiante=>array('view','id'=>$model->RutEstudiante),
	'Update',
);

$this->menu=array(
	array('label'=>'List Estudiantelogin', 'url'=>array('index')),
	array('label'=>'Create Estudiantelogin', 'url'=>array('create')),
	array('label'=>'View Estudiantelogin', 'url'=>array('view', 'id'=>$model->RutEstudiante)),
	array('label'=>'Manage Estudiantelogin', 'url'=>array('admin')),
);
?>

<h1>Update Estudiantelogin <?php echo $model->RutEstudiante; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>