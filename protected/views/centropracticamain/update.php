<?php
/* @var $this CentropracticamainController */
/* @var $model Centropractica */

$this->breadcrumbs=array(
	'Centropracticas'=>array('index'),
	$model->RBD=>array('view','id'=>$model->RBD),
	'Update',
);

$this->menu=array(
	array('label'=>'List Centropractica', 'url'=>array('index')),
	array('label'=>'Create Centropractica', 'url'=>array('create')),
	array('label'=>'View Centropractica', 'url'=>array('view', 'id'=>$model->RBD)),
	array('label'=>'Manage Centropractica', 'url'=>array('admin')),
);
?>

<h1>Update Centropractica <?php echo $model->RBD; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>