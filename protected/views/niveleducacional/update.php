<?php
/* @var $this NiveleducacionalController */
/* @var $model Niveleducacional */

$this->breadcrumbs=array(
	'Niveleducacionals'=>array('index'),
	$model->CodNivel=>array('view','id'=>$model->CodNivel),
	'Update',
);

$this->menu=array(
	array('label'=>'List Niveleducacional', 'url'=>array('index')),
	array('label'=>'Create Niveleducacional', 'url'=>array('create')),
	array('label'=>'View Niveleducacional', 'url'=>array('view', 'id'=>$model->CodNivel)),
	array('label'=>'Manage Niveleducacional', 'url'=>array('admin')),
);
?>

<h1>Update Niveleducacional <?php echo $model->CodNivel; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>