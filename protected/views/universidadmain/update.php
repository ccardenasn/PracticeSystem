<?php
/* @var $this UniversidadmainController */
/* @var $model Universidad */

$this->breadcrumbs=array(
	'Universidads'=>array('index'),
	$universidadModel->NombreInstitucion=>array('view','id'=>$universidadModel->NombreInstitucion),
	'Update',
);

$this->menu=array(
	array('label'=>'List Universidad', 'url'=>array('index')),
	array('label'=>'Create Universidad', 'url'=>array('create')),
	array('label'=>'View Universidad', 'url'=>array('view', 'id'=>$universidadModel->NombreInstitucion)),
	array('label'=>'Manage Universidad', 'url'=>array('admin')),
);
?>

<h1>Update Universidad <?php echo $universidadModel->NombreInstitucion; ?></h1>

<?php $this->renderPartial('_form',
						   array(
							   'universidadModel'=>$universidadModel,
							   'carreraModel'=>$carreraModel,
							   'secretariaModel'=>$secretariaModel,
						   )); ?>