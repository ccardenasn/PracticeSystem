<?php
/* @var $this PerfildocenteresponsablepracticaController */
/* @var $model Perfildocenteresponsablepractica */

$this->breadcrumbs=array(
	$model->RutResponsable=>array('view','id'=>$model->RutResponsable),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'List Perfildocenteresponsablepractica', 'url'=>array('index')),
	array('label'=>'Create Perfildocenteresponsablepractica', 'url'=>array('create')),
	array('label'=>'View Perfildocenteresponsablepractica', 'url'=>array('view', 'id'=>$model->RutResponsable)),
	array('label'=>'Manage Perfildocenteresponsablepractica', 'url'=>array('admin')),
);
?>

<h1>Modificar Docente Responsable de Práctica: <?php echo $model->NombreResponsable; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>