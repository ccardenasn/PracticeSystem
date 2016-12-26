<?php
/* @var $this DocenteresponsablepracticaController */
/* @var $model Docenteresponsablepractica */

$this->breadcrumbs=array(
	'Docentes Responsables de Practicas'=>array('index'),
	$model->RutResponsable=>array('view','id'=>$model->RutResponsable),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Lista de Docentes Responsables de Practicas', 'url'=>array('index')),
	array('label'=>'Añadir Docente Responsable de Practicas', 'url'=>array('create')),
	array('label'=>'Ver Docente Responsable de Practicas', 'url'=>array('view', 'id'=>$model->RutResponsable)),
	array('label'=>'Administrar Docentes Responsables de Practicas', 'url'=>array('admin')),
);
?>

<h1>Modificar Docentes Responsables de Practicas <?php echo $model->RutResponsable; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>