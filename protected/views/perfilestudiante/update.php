<?php
/* @var $this EstudianteController */
/* @var $model Estudiante */

$this->breadcrumbs=array(
    $model->RutEstudiante=>array('view','id'=>$model->RutEstudiante),'Modificar',
);

$this->menu=array(
	array('label'=>'Ver Estudiante', 'url'=>array('view', 'id'=>$model->RutEstudiante)),
);
?>

<h1>Modificar Estudiante <?php echo $model->RutEstudiante; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>