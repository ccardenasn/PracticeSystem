<?php
/* @var $this DirectorcarreraloginController */
/* @var $model Directorcarreralogin */

$this->pageTitle= Yii::app()->name." - "."Cambiar Contraseña";

$this->breadcrumbs=array(
	'Cambiar Contraseña',
);

?>

<h1>Cambiar Contraseña</h1>
<h2>Director: <?php echo $model->NombreDirector; ?></h2>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>