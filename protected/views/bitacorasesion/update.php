<?php
/* @var $this BitacorasesionController */
/* @var $model Bitacorasesion */

$this->breadcrumbs=array(
	'Bitacorasesions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Bitacorasesion', 'url'=>array('index')),
	array('label'=>'Create Bitacorasesion', 'url'=>array('create')),
	array('label'=>'View Bitacorasesion', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Bitacorasesion', 'url'=>array('admin')),
);
?>

<h1>Update Bitacorasesion <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_updateForm',
						   array(
							   'model'=>$model,
							   'claseBitacoraModel'=>$claseBitacoraModel,
						   )); ?>