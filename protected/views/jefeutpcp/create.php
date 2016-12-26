<?php
/* @var $this JefeutpcpController */
/* @var $model Jefeutpcp */

$this->breadcrumbs=array(
	'Jefe UTP CP'=>array('index'),
	'Añadir',
);

$this->menu=array(
	array('label'=>'Lista de Jefes UTP CP', 'url'=>array('index')),
	array('label'=>'Administrar Jefe UTP CP', 'url'=>array('admin')),
);
?>

<h1>Añadir Jefe UTP CP</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>