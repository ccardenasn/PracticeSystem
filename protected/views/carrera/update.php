<?php
/* @var $this CarreraController */
/* @var $model Carrera */

$this->breadcrumbs=array(
	'Carreras'=>array('index'),
	$model->codCarrera=>array('view','id'=>$model->codCarrera),
	'Update',
);

$this->menu=array(
	array('label'=>'List Carrera', 'url'=>array('index')),
	array('label'=>'Create Carrera', 'url'=>array('create')),
	array('label'=>'View Carrera', 'url'=>array('view', 'id'=>$model->codCarrera)),
	array('label'=>'Manage Carrera', 'url'=>array('admin')),
);
?>

<h1>Update Carrera <?php echo $model->codCarrera; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>