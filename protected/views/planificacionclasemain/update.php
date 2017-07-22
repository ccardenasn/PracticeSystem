<?php
/* @var $this PlanificacionclasemainController */
/* @var $model Planificacionclasemain */

$this->breadcrumbs=array(
	'Planificacionclasemains'=>array('index'),
	$model->CodPlanificacion=>array('view','id'=>$model->CodPlanificacion),
	'Update',
);

$this->menu=array(
	array('label'=>'List Planificacionclasemain', 'url'=>array('index')),
	array('label'=>'Create Planificacionclasemain', 'url'=>array('create')),
	array('label'=>'View Planificacionclasemain', 'url'=>array('view', 'id'=>$model->CodPlanificacion)),
	array('label'=>'Manage Planificacionclasemain', 'url'=>array('admin')),
);
?>

<h1>Update Planificacionclasemain <?php echo $model->CodPlanificacion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>