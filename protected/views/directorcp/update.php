<?php
/* @var $this DirectorcpController */
/* @var $model Directorcp */

$this->breadcrumbs=array(
	'Director CP'=>array('index'),
	$model->RutDirectorCP=>array('view','id'=>$model->RutDirectorCP),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Lista de Directores CP', 'url'=>array('index')),
	array('label'=>'Añadir Director CP', 'url'=>array('create')),
	array('label'=>'Ver Director CP', 'url'=>array('view', 'id'=>$model->RutDirectorCP)),
	array('label'=>'Administrar Director CP', 'url'=>array('admin')),
);
?>

<h1>Modificar Director CP <?php echo $model->RutDirectorCP; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>