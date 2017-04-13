<?php
/* @var $this CentropracticaController */
/* @var $model Centropractica */

$this->breadcrumbs=array(
	'Centro de Prácticas'=>array('index'),
	$model->RBD,
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->RBD)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RBD),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Adminsitración', 'url'=>array('admin')),
);
?>

<h1>Centro de Práctica: <?php echo $model->NombreCentroPractica; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'RBD',
		'NombreCentroPractica',
		'VigenciaProtocolo',
		'FechaProtocolo',
		array(
            'name'=>'Anexo Protocolo (click en el enlace)',
			'type' => 'raw',
            'value'=>CHtml::link(CHtml::encode($model->AnexoProtocolo), Yii::app()->baseUrl .'/PDFFiles/'.$model->AnexoProtocolo,array('target'=>'_blank'))
            ),
		'Dependencia',
		'NivelEducacional',
		'Area',
		'Region_codRegion',
		'Provincia_codProvincia',
		'Ciudad_codCiudad',
		'Calle',
		array(
            'name'=>'ImagenCentroPractica',
			'type' => 'raw',
            'value'=>CHtml::Image(Yii::app()->request->baseUrl.'/images/ImagenCentroPracticas/'.$model->ImagenCentroPractica)
            ),
	),
)); ?>
