<?php
/* @var $this HorarioadminController */
/* @var $model Horarioadmin */

$this->breadcrumbs=array(
	'Horarioadmins'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Horarioadmin', 'url'=>array('index')),
	array('label'=>'Manage Horarioadmin', 'url'=>array('admin')),
);
?>

<h1>Create Horarioadmin</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>