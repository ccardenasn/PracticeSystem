<?php
/* @var $this PerfildocenteresponsablepracticaController */
/* @var $model Perfildocenteresponsablepractica */

$this->breadcrumbs=array(
	$model->RutResponsable,
);

$this->menu=array(
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->RutResponsable)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RutResponsable),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Docente Responsable de Prácticas: <?php echo $model->NombreResponsable; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'RutResponsable',
		'NombreResponsable',
		'ClaveResponsable',
		'MailResponsable',
		'TelefonoResponsable',
		'CelularResponsable',
		array(
            'name'=>'ImagenResponsable',
			'type' => 'raw',
            'value'=>CHtml::Image(Yii::app()->request->baseUrl.'/images/ImagenDocentesResponsablesPracticas/'.$model->ImagenResponsable)
            ),
	),
)); ?>
