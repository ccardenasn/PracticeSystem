<?php
/* @var $this ProfesorguiacpController */
/* @var $model Profesorguiacp */

$this->breadcrumbs=array(
	'Profesor Guia CP'=>array('index'),
	$model->RutProfGuiaCP=>array('view','id'=>$model->RutProfGuiaCP),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista de Profesores Guia CP', 'url'=>array('index')),
	array('label'=>'Añadir Profesor Guia CP', 'url'=>array('create')),
	array('label'=>'Ver Profesor Guia CP', 'url'=>array('view', 'id'=>$model->RutProfGuiaCP)),
	array('label'=>'Administrar Profesor Guia CP', 'url'=>array('admin')),
);
?>

<h1>Modificar Profesor Guia CP <?php echo $model->RutProfGuiaCP; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>