<?php
/* @var $this HorarioadminController */
/* @var $model Horarioadmin */

$this->breadcrumbs=array(
	'Horarioadmins'=>array('index'),
	$model->CodHorario=>array('view','id'=>$model->CodHorario),
	'Update',
);

$this->menu=array(
	array('label'=>'List Horarioadmin', 'url'=>array('index')),
	array('label'=>'Create Horarioadmin', 'url'=>array('create')),
	array('label'=>'View Horarioadmin', 'url'=>array('view', 'id'=>$model->CodHorario)),
	array('label'=>'Manage Horarioadmin', 'url'=>array('admin')),
);
?>

<h1>Update Horarioadmin <?php echo $model->CodHorario; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>