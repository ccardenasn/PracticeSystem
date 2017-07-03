<?php
/* @var $this DocenteresponsablepracticaloginController */
/* @var $model Docenteresponsablepracticalogin */

$this->breadcrumbs=array(
	'Cambiar Contraseña',
);

?>

<h1>Cambiar Contraseña</h1>
<h2>Docente Responsable de Práctica: <?php echo $model->NombreResponsable; ?></h2>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>