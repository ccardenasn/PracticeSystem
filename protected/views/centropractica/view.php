<?php
/* @var $this CentropracticaController */
/* @var $model Centropractica */

$this->breadcrumbs=array(
	'Centros de Practica'=>array('index'),
	$model->RBD,
);

$this->menu=array(
	array('label'=>'Lista de Centros de Practica', 'url'=>array('index')),
	array('label'=>'Añadir Centro de Practica', 'url'=>array('create')),
	array('label'=>'Modificar Centro de Practica', 'url'=>array('update', 'id'=>$model->RBD)),
	array('label'=>'Eliminar Centro de Practica', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RBD),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Adminsitrar Centros de Practica', 'url'=>array('admin')),
);
?>

<h1>Centro de Practica: <?php echo $model->NombreCentroPractica; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'RBD',
        array('name'=>'Nombre','value'=>$model->NombreCentroPractica),
		array('name'=>'Vigencia Protocolo','value'=>$model->VigenciaProtocolo),
        array('name'=>'Fecha Protocolo','value'=>$model->FechaProtocolo),
        array(
            'name'=>'AnexoProtocolo',
			'type' => 'raw',
            'value'=>CHtml::link(CHtml::encode($model->AnexoProtocolo), Yii::app()->baseUrl .'/PDFFiles/'.$model->AnexoProtocolo,array('target'=>'_blank'))
            ),
		'Dependencia',
        array('name'=>'Nivel Educacional','value'=>$model->NivelEducacional),
		'Area',
        array('name'=>'Region','value'=>$model->regionCodRegion->NombreRegion),
        array('name'=>'Provincia','value'=>$model->provinciaCodProvincia->NombreProvincia),
        array('name'=>'Ciudad','value'=>$model->ciudadCodCiudad->NombreCiudad),
		'Calle',
	),
)); ?>
