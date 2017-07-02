<?php
/* @var $this CarrerarepController */
/* @var $model Carrerarep */

$this->breadcrumbs=array(
	'Carrerareps'=>array('index'),
	$model->codCarrera=>array('view','id'=>$model->codCarrera),
	'Update',
);

$this->menu=array(
	array('label'=>'List Carrerarep', 'url'=>array('index')),
	array('label'=>'Create Carrerarep', 'url'=>array('create')),
	array('label'=>'View Carrerarep', 'url'=>array('view', 'id'=>$model->codCarrera)),
	array('label'=>'Manage Carrerarep', 'url'=>array('admin')),
);
?>

<h1>Update Carrerarep <?php echo $model->codCarrera; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>