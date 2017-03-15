<?php
/* @var $this UniversidadmainController */
/* @var $model Universidad */

$this->breadcrumbs=array(
	'Universidads'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Universidad', 'url'=>array('index')),
	array('label'=>'Manage Universidad', 'url'=>array('admin')),
);
?>

<h1>Create Universidad</h1>

<?php $this->renderPartial('_form',
						   array(
							   'universidadModel'=>$universidadModel,
							   'carreraModel'=>$carreraModel,
							   'secretariaModel'=>$secretariaModel,
						   )); ?>