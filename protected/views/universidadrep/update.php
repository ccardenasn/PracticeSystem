<?php
/* @var $this UniversidadrepController */
/* @var $model Universidadrep */

$this->breadcrumbs=array(
	'Universidadreps'=>array('index'),
	$model->CodInstitucion=>array('view','id'=>$model->CodInstitucion),
	'Update',
);

$this->menu=array(
	array('label'=>'List Universidadrep', 'url'=>array('index')),
	array('label'=>'Create Universidadrep', 'url'=>array('create')),
	array('label'=>'View Universidadrep', 'url'=>array('view', 'id'=>$model->CodInstitucion)),
	array('label'=>'Manage Universidadrep', 'url'=>array('admin')),
);
?>

<h1>Update Universidadrep <?php echo $model->CodInstitucion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>