<?php
/* @var $this PlanificacionclaseresponsableController */
/* @var $model Planificacionclaseresponsable */

$this->breadcrumbs=array(
	'Planificacionclaseresponsables'=>array('index'),
	$model->CodPlanificacion=>array('view','id'=>$model->CodPlanificacion),
	'Update',
);

$this->menu=array(
	array('label'=>'List Planificacionclaseresponsable', 'url'=>array('index')),
	array('label'=>'Create Planificacionclaseresponsable', 'url'=>array('create')),
	array('label'=>'View Planificacionclaseresponsable', 'url'=>array('view', 'id'=>$model->CodPlanificacion)),
	array('label'=>'Manage Planificacionclaseresponsable', 'url'=>array('admin')),
);
?>

<h1>Update Planificacionclaseresponsable <?php echo $model->CodPlanificacion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>