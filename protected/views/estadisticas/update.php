<?php
/* @var $this EstadisticasController */
/* @var $model Estadisticas */

$this->breadcrumbs=array(
	'Estadisticases'=>array('index'),
	$model->RBD=>array('view','id'=>$model->RBD),
	'Update',
);

$this->menu=array(
	array('label'=>'List Estadisticas', 'url'=>array('index')),
	array('label'=>'Create Estadisticas', 'url'=>array('create')),
	array('label'=>'View Estadisticas', 'url'=>array('view', 'id'=>$model->RBD)),
	array('label'=>'Manage Estadisticas', 'url'=>array('admin')),
);
?>

<h1>Update Estadisticas <?php echo $model->RBD; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>