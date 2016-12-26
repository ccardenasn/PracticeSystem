<?php
/* @var $this ProfesorcoordinadorpracticacpController */
/* @var $model Profesorcoordinadorpracticacp */

$this->breadcrumbs=array(
	'Profesor Coordinador de Practicas CP'=>array('index'),
	$model->RutProfCoordGuiaCp=>array('view','id'=>$model->RutProfCoordGuiaCp),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista de Profesores Coordinadores de Practicas CP', 'url'=>array('index')),
	array('label'=>'Añadir Profesor Coordinador de Practicas CP', 'url'=>array('create')),
	array('label'=>'Ver Profesor Coordinador de Practicas CP', 'url'=>array('view', 'id'=>$model->RutProfCoordGuiaCp)),
	array('label'=>'Administrar Profesores Coordinadores de Practicas CP', 'url'=>array('admin')),
);
?>

<h1>Modificar Profesor Coordinador de Practicas CP<?php echo $model->RutProfCoordGuiaCp; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>