<?php
/* @var $this DocentecoordinadorpracticasController */
/* @var $model Docentecoordinadorpracticas */

$this->breadcrumbs=array(
	'Docente Coordinador de Practicas'=>array('index'),
	$model->RutCoordinador=>array('view','id'=>$model->RutCoordinador),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Lista de Docentes Coordinadores de Practicas', 'url'=>array('index')),
	array('label'=>'Añadir Docente Coordinador de Practicas', 'url'=>array('create')),
	array('label'=>'Ver Docente Coordinador de Practicas', 'url'=>array('view', 'id'=>$model->RutCoordinador)),
	array('label'=>'Administrar Docente Coordinador de Practicas', 'url'=>array('admin')),
);
?>

<h1>Modificar Docente Coordinador de Practicas<?php echo $model->RutCoordinador; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>