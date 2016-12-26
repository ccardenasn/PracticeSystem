<?php
/* @var $this PlanificacionclaseadministradorController */
/* @var $model Planificacionclaseadministrador */

$this->breadcrumbs=array(
	'Planificacionclaseadministradors'=>array('index'),
	$model->CodPlanificacion=>array('view','id'=>$model->CodPlanificacion),
	'Update',
);

$this->menu=array(
	array('label'=>'List Planificacionclaseadministrador', 'url'=>array('index')),
	array('label'=>'Create Planificacionclaseadministrador', 'url'=>array('create')),
	array('label'=>'View Planificacionclaseadministrador', 'url'=>array('view', 'id'=>$model->CodPlanificacion)),
	array('label'=>'Manage Planificacionclaseadministrador', 'url'=>array('admin')),
);
?>

<h1>Update Planificacionclaseadministrador <?php echo $model->CodPlanificacion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>