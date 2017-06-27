<?php
/* @var $this MencionmainController */
/* @var $model Mencionmain */

$this->breadcrumbs=array(
	'Mencionmains'=>array('index'),
	$model->CodMencion=>array('view','id'=>$model->CodMencion),
	'Update',
);

$this->menu=array(
	array('label'=>'List Mencionmain', 'url'=>array('index')),
	array('label'=>'Create Mencionmain', 'url'=>array('create')),
	array('label'=>'View Mencionmain', 'url'=>array('view', 'id'=>$model->CodMencion)),
	array('label'=>'Manage Mencionmain', 'url'=>array('admin')),
);
?>

<h1>Update Mencionmain <?php echo $model->CodMencion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>