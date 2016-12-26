<?php
/* @var $this ConfiguracionpracticaController */
/* @var $model Configuracionpractica */

$this->breadcrumbs=array(
	'Configuracion de Practicas'=>array('index'),
	$model->NombrePractica=>array('view','id'=>$model->NombrePractica),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Lista de Practicas', 'url'=>array('index')),
	array('label'=>'Añadir Practica', 'url'=>array('create')),
	array('label'=>'Ver Practica', 'url'=>array('view', 'id'=>$model->NombrePractica)),
	array('label'=>'Administrar Practica', 'url'=>array('admin')),
);
?>

<h1>Modificar Practica <?php echo $model->NombrePractica; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>