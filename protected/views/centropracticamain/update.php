<?php
/* @var $this CentropracticamainController */
/* @var $model Centropractica */

$this->breadcrumbs=array(
	'Centropracticas'=>array('index'),
	$centroModel->RBD=>array('view','id'=>$centroModel->RBD),
	'Update',
);

$this->menu=array(
	array('label'=>'List Centropractica', 'url'=>array('index')),
	array('label'=>'Create Centropractica', 'url'=>array('create')),
	array('label'=>'View Centropractica', 'url'=>array('view', 'id'=>$centroModel->RBD)),
	array('label'=>'Manage Centropractica', 'url'=>array('admin')),
);
?>

<h1>Update Centropractica <?php echo $centroModel->RBD; ?></h1>

<?php $this->renderPartial('_updateForm', 
						   array(
							   'centroModel'=>$centroModel,
							   'secretariaModel'=>$secretariaModel,
							   'directorModel'=>$directorModel,
							   'jefeutpModel'=>$jefeutpModel,
							   'coordinadorModel'=>$coordinadorModel,
							   'profesorModel'=>$profesorModel,
						   )); ?>