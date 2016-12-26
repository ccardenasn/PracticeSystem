<?php
/* @var $this ClasebitacoraController */
/* @var $model Clasebitacora */

$this->breadcrumbs=array(
	'Clasebitacoras'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Clasebitacora', 'url'=>array('index')),
	array('label'=>'Manage Clasebitacora', 'url'=>array('admin')),
);
?>

<h1>Create Clasebitacora</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>