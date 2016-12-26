<?php
/* @var $this ClasebitacoraController */
/* @var $model Clasebitacora */

$this->breadcrumbs=array(
	'Clasebitacoras'=>array('index'),
	$model->CodClaseBitacora=>array('view','id'=>$model->CodClaseBitacora),
	'Update',
);

$this->menu=array(
	array('label'=>'List Clasebitacora', 'url'=>array('index')),
	array('label'=>'Create Clasebitacora', 'url'=>array('create')),
	array('label'=>'View Clasebitacora', 'url'=>array('view', 'id'=>$model->CodClaseBitacora)),
	array('label'=>'Manage Clasebitacora', 'url'=>array('admin')),
);
?>

<h1>Update Clasebitacora <?php echo $model->CodClaseBitacora; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>