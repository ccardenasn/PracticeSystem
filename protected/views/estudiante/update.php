<?php
/* @var $this EstudianteController */
/* @var $model Estudiante */

$this->breadcrumbs=array(
	'Estudiantes'=>array('index'),
	$model->RutEstudiante=>array('view','id'=>$model->RutEstudiante),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Lista de Estudiantes', 'url'=>array('index')),
	array('label'=>'Añadir Estudiante', 'url'=>array('create')),
	array('label'=>'Detalles de Estudiante', 'url'=>array('view', 'id'=>$model->RutEstudiante)),
	array('label'=>'Administrar Estudiantes', 'url'=>array('admin')),
);
?>


<h1>Modificar Estudiante: <?php echo $model->NombreEstudiante; ?></h1>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>