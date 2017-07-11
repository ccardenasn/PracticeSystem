<?php
/* @var $this DocentecoordinadorpracticasloginController */
/* @var $model Docentecoordinadorpracticaslogin */

$this->pageTitle= Yii::app()->name." - "."Cambiar Contraseña";

$this->breadcrumbs=array(
	'Cambiar Contraseña',
);

?>

<h1>Cambiar Contraseña</h1>
<h2>Docente Coordinador de Prácticas: <?php echo $model->NombreCoordinador; ?></h2>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>