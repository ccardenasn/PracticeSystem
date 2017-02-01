<?php
/* @var $this HorarioAdminController */
/* @var $model HorarioAdmin */

$this->breadcrumbs=array(
	'Horario Admins'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List HorarioAdmin', 'url'=>array('index')),
	array('label'=>'Manage HorarioAdmin', 'url'=>array('admin')),
);
?>

<h1>Create HorarioAdmin</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>