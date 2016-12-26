<?php
/* @var $this DocentesupervisorpracticaController */
/* @var $model Docentesupervisorpractica */

$this->breadcrumbs=array(
	'Docente Supervisor de Practicas'=>array('index'),
	$model->RutSupervisor=>array('view','id'=>$model->RutSupervisor),
	'Modificar',
);

$this->menu=array(
	array('label'=>'List de Supervisores', 'url'=>array('index')),
	array('label'=>'Añadir Supervisor', 'url'=>array('create')),
	array('label'=>'Ver Suprvisor', 'url'=>array('view', 'id'=>$model->RutSupervisor)),
	array('label'=>'Administrar Supervisores', 'url'=>array('admin')),
);
?>

<h1>Modificar Docente Supervisor de Practica: <?php echo $model->RutSupervisor; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>