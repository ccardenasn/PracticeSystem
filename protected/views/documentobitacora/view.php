<?php
/* @var $this DocumentobitacoraController */
/* @var $model Documentobitacora */

$this->breadcrumbs=array(
	'Documentobitacoras'=>array('index'),
	$model->CodDocumentoBitacora,
);

$this->menu=array(
	array('label'=>'List Documentobitacora', 'url'=>array('index')),
	array('label'=>'Create Documentobitacora', 'url'=>array('create')),
	array('label'=>'Resubir Documento', 'url'=>array('update', 'id'=>$model->CodDocumentoBitacora)),
	array('label'=>'Delete Documentobitacora', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CodDocumentoBitacora),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Documentobitacora', 'url'=>array('admin')),
);
?>

<h1>View Documentobitacora #<?php echo $model->CodDocumentoBitacora; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'CodDocumentoBitacora',
		'DocumentoWord',
		'bitacorasesion_id',
	),
)); ?>
