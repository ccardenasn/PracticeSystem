<?php
/* @var $this JefeutpcpController */
/* @var $model Jefeutpcp */

$this->breadcrumbs=array(
	'Jefe UTP CP'=>array('index'),
	$model->RutJefeUTPCP=>array('view','id'=>$model->RutJefeUTPCP),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Lista de Jefes UTP CP', 'url'=>array('index')),
	array('label'=>'Añadir Jefe UTP CP', 'url'=>array('create')),
	array('label'=>'Ver Jefe UTP CP', 'url'=>array('view', 'id'=>$model->RutJefeUTPCP)),
	array('label'=>'Administrar Jefe UTP CP', 'url'=>array('admin')),
);
?>

<h1>Modificar Jefe UTP CP <?php echo $model->RutJefeUTPCP; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>