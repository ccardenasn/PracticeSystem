<?php
/* @var $this DocumentoscarreraController */
/* @var $model Documentoscarrera */

$this->breadcrumbs=array(
	'Documentoscarreras'=>array('index'),
	$model->NombreDocumentoCarrera=>array('view','id'=>$model->NombreDocumentoCarrera),
	'Update',
);

$this->menu=array(
	array('label'=>'List Documentoscarrera', 'url'=>array('index')),
	array('label'=>'Create Documentoscarrera', 'url'=>array('create')),
	array('label'=>'View Documentoscarrera', 'url'=>array('view', 'id'=>$model->NombreDocumentoCarrera)),
	array('label'=>'Manage Documentoscarrera', 'url'=>array('admin')),
);
?>

<h1>Update Documentoscarrera <?php echo $model->NombreDocumentoCarrera; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>