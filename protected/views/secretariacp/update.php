<?php
/* @var $this SecretariacpController */
/* @var $model Secretariacp */

$this->breadcrumbs=array(
	'Secretaria CP'=>array('index'),
	$model->RutSecretariaCP=>array('view','id'=>$model->RutSecretariaCP),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Lista de Secretarias CP', 'url'=>array('index')),
	array('label'=>'Añadir Secretaria CP', 'url'=>array('create')),
	array('label'=>'Ver Secretaria CP', 'url'=>array('view', 'id'=>$model->RutSecretariaCP)),
	array('label'=>'Administrar Secretarias CP', 'url'=>array('admin')),
);
?>

<h1>Modificar Secretaria CP <?php echo $model->RutSecretariaCP; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>