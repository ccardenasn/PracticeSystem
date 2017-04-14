<?php
/* @var $this PerfildocentecoordinadorpracticasController */
/* @var $model Perfildocentecoordinadorpracticas */

$this->breadcrumbs=array(
	$model->RutCoordinador=>array('view','id'=>$model->RutCoordinador),
	'Modificar',
);

$this->menu=array(
	array('label'=>'List Perfildocentecoordinadorpracticas', 'url'=>array('index')),
	array('label'=>'Create Perfildocentecoordinadorpracticas', 'url'=>array('create')),
	array('label'=>'View Perfildocentecoordinadorpracticas', 'url'=>array('view', 'id'=>$model->RutCoordinador)),
	array('label'=>'Manage Perfildocentecoordinadorpracticas', 'url'=>array('admin')),
);
?>

<h1>Modificar Docente Coordinador de Prácticas: <?php echo $model->NombreCoordinador; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>