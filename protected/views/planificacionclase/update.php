<?php
/* @var $this PlanificacionclaseController */
/* @var $model Planificacionclase */

$this->breadcrumbs=array(
	'Planificacionclases'=>array('index'),
	$model->CodPlanificacion=>array('view','id'=>$model->CodPlanificacion),
	'Update',
);

$this->menu=array(
	array('label'=>'List Planificacionclase', 'url'=>array('index')),
	array('label'=>'Create Planificacionclase', 'url'=>array('create')),
	array('label'=>'View Planificacionclase', 'url'=>array('view', 'id'=>$model->CodPlanificacion)),
	array('label'=>'Manage Planificacionclase', 'url'=>array('admin')),
);
?>

<h1>Update Planificacionclase <?php echo $model->CodPlanificacion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>