<?php
/* @var $this CentropracticaController */
/* @var $model Centropractica */

$this->breadcrumbs=array(
	'Centro de Practica'=>array('index'),
	$model->RBD=>array('view','id'=>$model->RBD),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Lista de Centros de Practica', 'url'=>array('index')),
	array('label'=>'Añadir Centro de Practica', 'url'=>array('create')),
	array('label'=>'Ver Centro de Practica', 'url'=>array('view', 'id'=>$model->RBD)),
	array('label'=>'Administrar Centros de Practica', 'url'=>array('admin')),
);
?>

<h1>Modificar Centro de Practica <?php echo $model->RBD; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>