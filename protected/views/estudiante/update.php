<?php
/* @var $this EstudianteController */
/* @var $model Estudiante */

$this->breadcrumbs=array(
	'Estudiantes'=>array('index'),
	$model->RutEstudiante=>array('view','id'=>$model->RutEstudiante),
	'Update',
);

$this->menu=array(
	array('label'=>'List Estudiante', 'url'=>array('index')),
	array('label'=>'Create Estudiante', 'url'=>array('create')),
	array('label'=>'View Estudiante', 'url'=>array('view', 'id'=>$model->RutEstudiante)),
	array('label'=>'Manage Estudiante', 'url'=>array('admin')),
);
?>

<h1>Update Estudiante <?php echo $model->RutEstudiante; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>