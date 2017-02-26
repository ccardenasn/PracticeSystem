<?php
/* @var $this DocumentoscarreraController */
/* @var $model Documentoscarrera */

$this->breadcrumbs=array(
	'Documentoscarreras'=>array('index'),
	$model->NombreDocumentoCarrera,
);

$this->menu=array(
	array('label'=>'List Documentoscarrera', 'url'=>array('index')),
	array('label'=>'Create Documentoscarrera', 'url'=>array('create')),
	array('label'=>'Update Documentoscarrera', 'url'=>array('update', 'id'=>$model->NombreDocumentoCarrera)),
	array('label'=>'Delete Documentoscarrera', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->NombreDocumentoCarrera),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Documentoscarrera', 'url'=>array('admin')),
);
?>

<h1>View Documentoscarrera #<?php echo $model->NombreDocumentoCarrera; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'NombreDocumentoCarrera',
		array(
            'name'=>'ArchivoDocumentoCarrera',
			'type' => 'raw',
            'value'=>CHtml::link(CHtml::encode($model->ArchivoDocumentoCarrera), Yii::app()->baseUrl .'/PDFFiles/'.$model->ArchivoDocumentoCarrera,array('target'=>'_blank'))
            ),
		array('name'=>'CategoriaDocumentos_CodCategoriaDocumentos','value'=>$model->categoriaDocumentosCodCategoriaDocumentos->NombreCategoriaDocumentos),
	),
)); ?>
