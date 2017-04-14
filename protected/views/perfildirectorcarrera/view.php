<?php
/* @var $this PerfildirectorcarreraController */
/* @var $model Perfildirectorcarrera */

$this->breadcrumbs=array(
	$model->RutDirector,
);

$this->menu=array(
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->RutDirector)),
	array('label'=>'Elimiinar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RutDirector),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Director de Carrera: <?php echo $model->NombreDirector; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'RutDirector',
		'NombreDirector',
		'ClaveDirector',
		'MailDirector',
		'TelefonoDirector',
		'CelularDirector',
		array(
            'name'=>'ImagenDirector',
			'type' => 'raw',
            'value'=>CHtml::Image(Yii::app()->request->baseUrl.'/images/ImagenDirector/'.$model->ImagenDirector)
            ),
	),
)); ?>
