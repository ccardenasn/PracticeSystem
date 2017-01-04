<?php
/* @var $this AsignaturaController */
/* @var $model Asignatura */

$this->breadcrumbs=array(
	'Asignaturas'=>array('index'),
	$model->NombreAsignatura=>array('view','id'=>$model->NombreAsignatura),
	'Update',
);

$this->menu=array(
	array('label'=>'List Asignatura', 'url'=>array('index')),
	array('label'=>'Create Asignatura', 'url'=>array('create')),
	array('label'=>'View Asignatura', 'url'=>array('view', 'id'=>$model->NombreAsignatura)),
	array('label'=>'Manage Asignatura', 'url'=>array('admin')),
);
?>

<h1>Update Asignatura <?php echo $model->NombreAsignatura; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>