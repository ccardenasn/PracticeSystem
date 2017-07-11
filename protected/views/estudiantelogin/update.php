<?php
/* @var $this EstudianteloginController */
/* @var $model Estudiantelogin */

$this->pageTitle= Yii::app()->name." - "."Cambiar Contraseña";

$this->breadcrumbs=array(
	'Cambiar Contraseña',
);

?>

<h1>Cambiar Contraseña</h1>
<h2>Estudiante: <?php echo $model->NombreEstudiante; ?></h2>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>