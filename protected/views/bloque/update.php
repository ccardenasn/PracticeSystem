<?php
/* @var $this BloqueController */
/* @var $model Bloque */

$this->breadcrumbs=array(
	'Bloques'=>array('index'),
	$model->CodBloque=>array('view','id'=>$model->CodBloque),
	'Update',
);

$this->menu=array(
	array('label'=>'List Bloque', 'url'=>array('index')),
	array('label'=>'Create Bloque', 'url'=>array('create')),
	array('label'=>'View Bloque', 'url'=>array('view', 'id'=>$model->CodBloque)),
	array('label'=>'Manage Bloque', 'url'=>array('admin')),
);
?>

<h1>Update Bloque <?php echo $model->CodBloque; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>