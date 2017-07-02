<?php
/* @var $this ConfiguracionpracticamainController */
/* @var $model Configuracionpracticamain */

$this->breadcrumbs=array(
	'Configuracionpracticamains'=>array('index'),
	$model->CodPractica=>array('view','id'=>$model->CodPractica),
	'Update',
);

$this->menu=array(
	array('label'=>'List Configuracionpracticamain', 'url'=>array('index')),
	array('label'=>'Create Configuracionpracticamain', 'url'=>array('create')),
	array('label'=>'View Configuracionpracticamain', 'url'=>array('view', 'id'=>$model->CodPractica)),
	array('label'=>'Manage Configuracionpracticamain', 'url'=>array('admin')),
);
?>

<h1>Update Configuracionpracticamain <?php echo $model->CodPractica; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>