<?php
/* @var $this PerfildirectorcarreraController */
/* @var $model Perfildirectorcarrera */

$this->breadcrumbs=array(
	'Perfildirectorcarreras'=>array('index'),
	$model->RutDirector=>array('view','id'=>$model->RutDirector),
	'Update',
);

$this->menu=array(
	array('label'=>'List Perfildirectorcarrera', 'url'=>array('index')),
	array('label'=>'Create Perfildirectorcarrera', 'url'=>array('create')),
	array('label'=>'View Perfildirectorcarrera', 'url'=>array('view', 'id'=>$model->RutDirector)),
	array('label'=>'Manage Perfildirectorcarrera', 'url'=>array('admin')),
);
?>

<h1>Update Perfildirectorcarrera <?php echo $model->RutDirector; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>