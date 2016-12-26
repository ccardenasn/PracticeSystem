<?php
/* @var $this UniversidadController */
/* @var $model Universidad */

$this->breadcrumbs=array(
	'Universidad'=>array('index'),
	$model->NombreInstitucion=>array('view','id'=>$model->NombreInstitucion),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista Universidad', 'url'=>array('index')),
	array('label'=>'Añadir Universidad', 'url'=>array('create')),
	array('label'=>'Ver Universidad', 'url'=>array('view', 'id'=>$model->NombreInstitucion)),
	array('label'=>'Administrar Universidad', 'url'=>array('admin')),
);
?>

<h1>Modificar Universidad <?php echo $model->NombreInstitucion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>