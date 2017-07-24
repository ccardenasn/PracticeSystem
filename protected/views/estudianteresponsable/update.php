<?php
/* @var $this EstudianteresponsableController */
/* @var $model Estudianteresponsable */

$this->breadcrumbs=array(
	'Estudianteresponsables'=>array('index'),
	$model->RutEstudiante=>array('view','id'=>$model->RutEstudiante),
	'Update',
);

$this->menu=array(
	array('label'=>'List Estudianteresponsable', 'url'=>array('index')),
	array('label'=>'Create Estudianteresponsable', 'url'=>array('create')),
	array('label'=>'View Estudianteresponsable', 'url'=>array('view', 'id'=>$model->RutEstudiante)),
	array('label'=>'Manage Estudianteresponsable', 'url'=>array('admin')),
);
?>

<h1>Update Estudianteresponsable <?php echo $model->RutEstudiante; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>