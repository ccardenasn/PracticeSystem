<?php
/* @var $this CarreraController */
/* @var $model Carrera */

$this->breadcrumbs=array(
	'Carreras'=>array('index'),
	$model->codCarrera=>array('view','id'=>$model->codCarrera),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Lista de Carreras', 'url'=>array('index')),
	array('label'=>'Añadir Carrera', 'url'=>array('create')),
	array('label'=>'Ver Carrera', 'url'=>array('view', 'id'=>$model->codCarrera)),
	array('label'=>'Administrar Carrera', 'url'=>array('admin')),
);
?>

<h1>Modificar Carrera <?php echo $model->codCarrera; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>