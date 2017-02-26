<?php
/* @var $this CategoriadocumentosController */
/* @var $model Categoriadocumentos */

$this->breadcrumbs=array(
	'Categoriadocumentoses'=>array('index'),
	$model->CodCategoriaDocumentos=>array('view','id'=>$model->CodCategoriaDocumentos),
	'Update',
);

$this->menu=array(
	array('label'=>'List Categoriadocumentos', 'url'=>array('index')),
	array('label'=>'Create Categoriadocumentos', 'url'=>array('create')),
	array('label'=>'View Categoriadocumentos', 'url'=>array('view', 'id'=>$model->CodCategoriaDocumentos)),
	array('label'=>'Manage Categoriadocumentos', 'url'=>array('admin')),
);
?>

<h1>Update Categoriadocumentos <?php echo $model->CodCategoriaDocumentos; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>