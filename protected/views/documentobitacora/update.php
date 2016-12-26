<?php
/* @var $this DocumentobitacoraController */
/* @var $model Documentobitacora */

$this->breadcrumbs=array(
	'Documentobitacoras'=>array('index'),
	$model->CodDocumentoBitacora=>array('view','id'=>$model->CodDocumentoBitacora),
	'Update',
);

$this->menu=array(
	array('label'=>'List Documentobitacora', 'url'=>array('index')),
	array('label'=>'Create Documentobitacora', 'url'=>array('create')),
	array('label'=>'View Documentobitacora', 'url'=>array('view', 'id'=>$model->CodDocumentoBitacora)),
	array('label'=>'Manage Documentobitacora', 'url'=>array('admin')),
);
?>

<h1>Update Documentobitacora <?php echo $model->CodDocumentoBitacora; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>