<?php
/* @var $this CategoriadocumentosController */
/* @var $model Categoriadocumentos */

$this->breadcrumbs=array(
	'Categoriadocumentoses'=>array('index'),
	$model->CodCategoriaDocumentos,
);

$this->menu=array(
	array('label'=>'List Categoriadocumentos', 'url'=>array('index')),
	array('label'=>'Create Categoriadocumentos', 'url'=>array('create')),
	array('label'=>'Update Categoriadocumentos', 'url'=>array('update', 'id'=>$model->CodCategoriaDocumentos)),
	array('label'=>'Delete Categoriadocumentos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CodCategoriaDocumentos),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Categoriadocumentos', 'url'=>array('admin')),
);
?>

<h1>View Categoriadocumentos #<?php echo $model->CodCategoriaDocumentos; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'CodCategoriaDocumentos',
		'NombreCategoriaDocumentos',
	),
)); ?>
