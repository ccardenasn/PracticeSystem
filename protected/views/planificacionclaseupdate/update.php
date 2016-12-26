<?php
/* @var $this PlanificacionclaseupdateController */
/* @var $model Planificacionclaseupdate */

$this->breadcrumbs=array(
	'Planificaciones'=>array('planificacionclase/index'),
	$model->CodPlanificacion=>array('planificacionclase/view','id'=>$model->CodPlanificacion),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Lista de Planificaciones', 'url'=>array('planificacionclase/index')),
	array('label'=>'Añadir Planificacion', 'url'=>array('planificacionclase/create')),
	array('label'=>'Detalles de Planificacion', 'url'=>array('planificacionclase/view', 'id'=>$model->CodPlanificacion)),
);
?>

<h1>Modificar Planificacion </h1>
<h2>Sesion Informada: <?php echo $model->SesionInformada ?> </h2>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>