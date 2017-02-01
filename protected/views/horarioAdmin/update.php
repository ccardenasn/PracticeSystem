<?php
/* @var $this HorarioAdminController */
/* @var $model HorarioAdmin */

$this->breadcrumbs=array(
	'Horario Admins'=>array('index'),
	$model->CodHorario=>array('view','id'=>$model->CodHorario),
	'Update',
);

$this->menu=array(
	array('label'=>'List HorarioAdmin', 'url'=>array('index')),
	array('label'=>'Create HorarioAdmin', 'url'=>array('create')),
	array('label'=>'View HorarioAdmin', 'url'=>array('view', 'id'=>$model->CodHorario)),
	array('label'=>'Manage HorarioAdmin', 'url'=>array('admin')),
);
?>

<h1>Update HorarioAdmin <?php echo $model->CodHorario; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>