<?php
/* @var $this CentropracticamainController */
/* @var $model Centropractica */

$this->breadcrumbs=array(
	'Centropracticas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Centropractica', 'url'=>array('index')),
	array('label'=>'Manage Centropractica', 'url'=>array('admin')),
);
?>

<h1>Create Centropractica</h1>

<?php $this->renderPartial('_form', array('centroModel'=>$centroModel,'secretariaModel'=>$secretariaModel)); ?>