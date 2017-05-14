<?php
/* @var $this ConfiguracionpracticamainController */
/* @var $model Configuracionpracticamain */

$this->breadcrumbs=array(
	'Configuracionpracticamains'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Configuracionpracticamain', 'url'=>array('index')),
	array('label'=>'Manage Configuracionpracticamain', 'url'=>array('admin')),
);
?>

<h1>Create Configuracionpracticamain</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>