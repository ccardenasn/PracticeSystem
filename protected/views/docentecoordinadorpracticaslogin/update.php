<?php
/* @var $this DocentecoordinadorpracticasloginController */
/* @var $model Docentecoordinadorpracticaslogin */

$this->breadcrumbs=array(
	'Cambiar Contraseña',
);

$this->menu=array(
	array('label'=>'List Docentecoordinadorpracticaslogin', 'url'=>array('index')),
	array('label'=>'Create Docentecoordinadorpracticaslogin', 'url'=>array('create')),
	array('label'=>'View Docentecoordinadorpracticaslogin', 'url'=>array('view', 'id'=>$model->RutCoordinador)),
	array('label'=>'Manage Docentecoordinadorpracticaslogin', 'url'=>array('admin')),
);
?>

<h1>Cambiar Contraseña</h1>
<h2>Docente Coordinador de Prácticas: <?php echo $model->NombreCoordinador; ?></h2>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>