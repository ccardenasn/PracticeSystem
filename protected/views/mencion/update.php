<?php
/* @var $this MencionController */
/* @var $model Mencion */

$this->breadcrumbs=array(
	'Menciones'=>array('index'),
	$model->NombreMencion=>array('view','id'=>$model->NombreMencion),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Lista de Menciones', 'url'=>array('index')),
	array('label'=>'Añadir Mencion', 'url'=>array('create')),
	array('label'=>'Ver Mencion', 'url'=>array('view', 'id'=>$model->NombreMencion)),
	array('label'=>'Administrar Mencion', 'url'=>array('admin')),
);
?>

<h1>Modificar Mencion <?php echo $model->NombreMencion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>