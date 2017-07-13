<?php
/* @var $this DocenteresponsablepracticamainController */
/* @var $model Docenteresponsablepracticamain */

$this->breadcrumbs=array(
	'Docenteresponsablepracticamains'=>array('index'),
	$model->RutResponsable=>array('view','id'=>$model->RutResponsable),
	'Update',
);

$this->menu=array(
	array('label'=>'List Docenteresponsablepracticamain', 'url'=>array('index')),
	array('label'=>'Create Docenteresponsablepracticamain', 'url'=>array('create')),
	array('label'=>'View Docenteresponsablepracticamain', 'url'=>array('view', 'id'=>$model->RutResponsable)),
	array('label'=>'Manage Docenteresponsablepracticamain', 'url'=>array('admin')),
);
?>

<h1>Update Docenteresponsablepracticamain <?php echo $model->RutResponsable; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>