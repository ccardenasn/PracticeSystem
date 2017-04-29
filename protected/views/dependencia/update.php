<?php
/* @var $this DependenciaController */
/* @var $model Dependencia */

$this->breadcrumbs=array(
	'Dependencias'=>array('index'),
	$model->CodDependencia=>array('view','id'=>$model->CodDependencia),
	'Update',
);

$this->menu=array(
	array('label'=>'List Dependencia', 'url'=>array('index')),
	array('label'=>'Create Dependencia', 'url'=>array('create')),
	array('label'=>'View Dependencia', 'url'=>array('view', 'id'=>$model->CodDependencia)),
	array('label'=>'Manage Dependencia', 'url'=>array('admin')),
);
?>

<h1>Update Dependencia <?php echo $model->CodDependencia; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>