<?php
/* @var $this DirectorcarreraController */
/* @var $model Directorcarrera */

$this->breadcrumbs=array(
	'Director de Carrera'=>array('index'),
	$model->RutDirector=>array('view','id'=>$model->RutDirector),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Lista de Directores de Carrera', 'url'=>array('index')),
	array('label'=>'Añadir Director de Carrera', 'url'=>array('create')),
	array('label'=>'Ver Director de Carrera', 'url'=>array('view', 'id'=>$model->RutDirector)),
	array('label'=>'Administrar Director de Carrera', 'url'=>array('admin')),
);
?>

<h1>Modificar Director de Carrera <?php echo $model->RutDirector; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>