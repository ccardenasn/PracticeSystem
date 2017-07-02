<?php
/* @var $this DocenteresponsablepracticaloginController */
/* @var $model Docenteresponsablepracticalogin */

$this->breadcrumbs=array(
	'Cambiar Contraseña',
);

$this->menu=array(
	array('label'=>'List Docenteresponsablepracticalogin', 'url'=>array('index')),
	array('label'=>'Create Docenteresponsablepracticalogin', 'url'=>array('create')),
	array('label'=>'View Docenteresponsablepracticalogin', 'url'=>array('view', 'id'=>$model->RutResponsable)),
	array('label'=>'Manage Docenteresponsablepracticalogin', 'url'=>array('admin')),
);
?>
<h1>Cambiar Contraseña</h1>
<h2>Docente Responsable de Práctica: <?php echo $model->NombreResponsable; ?></h2>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>