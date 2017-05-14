<?php
/* @var $this ConfiguracionpracticamainController */
/* @var $model Configuracionpracticamain */

$this->breadcrumbs=array(
	'Configuracionpracticamains'=>array('index'),
	$model->NombrePractica=>array('view','id'=>$model->NombrePractica),
	'Update',
);

$this->menu=array(
	array('label'=>'List Configuracionpracticamain', 'url'=>array('index')),
	array('label'=>'Create Configuracionpracticamain', 'url'=>array('create')),
	array('label'=>'View Configuracionpracticamain', 'url'=>array('view', 'id'=>$model->NombrePractica)),
	array('label'=>'Manage Configuracionpracticamain', 'url'=>array('admin')),
);
?>

<h1>Update Configuracionpracticamain <?php echo $model->NombrePractica; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>