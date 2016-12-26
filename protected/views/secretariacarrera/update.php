<?php
/* @var $this SecretariacarreraController */
/* @var $model Secretariacarrera */

$this->breadcrumbs=array(
	'Secretaria de Carrera'=>array('index'),
	$model->RutSecretaria=>array('view','id'=>$model->RutSecretaria),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Lista de Secretaria de Carrera', 'url'=>array('index')),
	array('label'=>'Añadir Secretaria de Carrera', 'url'=>array('create')),
	array('label'=>'Ver Secretaria Carrera', 'url'=>array('view', 'id'=>$model->RutSecretaria)),
	array('label'=>'Administrar Secretaria de Carrera', 'url'=>array('admin')),
);
?>

<h1>Modificar Secretaria de Carrera <?php echo $model->RutSecretaria; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>