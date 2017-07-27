<?php
/* @var $this BitacorasesionresponsableController */
/* @var $model Bitacorasesionresponsable */

$this->breadcrumbs=array(
	'Bitacorasesionresponsables'=>array('index'),
	$model->CodBitacora=>array('view','id'=>$model->CodBitacora),
	'Update',
);

$this->menu=array(
	array('label'=>'List Bitacorasesionresponsable', 'url'=>array('index')),
	array('label'=>'Create Bitacorasesionresponsable', 'url'=>array('create')),
	array('label'=>'View Bitacorasesionresponsable', 'url'=>array('view', 'id'=>$model->CodBitacora)),
	array('label'=>'Manage Bitacorasesionresponsable', 'url'=>array('admin')),
);
?>

<h1>Update Bitacorasesionresponsable <?php echo $model->CodBitacora; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>