<?php
/* @var $this ProfesorguiacpmainController */
/* @var $model Profesorguiacp */

$this->breadcrumbs=array(
	'Profesorguiacps'=>array('index'),
	$model->RutProfGuiaCP=>array('view','id'=>$model->RutProfGuiaCP),
	'Update',
);

$this->menu=array(
	array('label'=>'List Profesorguiacp', 'url'=>array('index')),
	array('label'=>'Create Profesorguiacp', 'url'=>array('create')),
	array('label'=>'View Profesorguiacp', 'url'=>array('view', 'id'=>$model->RutProfGuiaCP)),
	array('label'=>'Manage Profesorguiacp', 'url'=>array('admin')),
);
?>

<h1>Update Profesorguiacp <?php echo $model->RutProfGuiaCP; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>