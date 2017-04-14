<?php
/* @var $this PerfildocentecoordinadorpracticasController */
/* @var $model Perfildocentecoordinadorpracticas */

$this->breadcrumbs=array(
	$model->RutCoordinador,
);

$this->menu=array(
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Modificar', 'url'=>array('update', 'id'=>$model->RutCoordinador)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RutCoordinador),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Docente Coordinador de Prácticas: <?php echo $model->NombreCoordinador; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'RutCoordinador',
		'NombreCoordinador',
		'ClaveCoordinador',
		'MailCoordinador',
		'TelefonoCoordinador',
		'CelularCoordinador',
		array(
            'name'=>'ImagenCoordinador',
			'type' => 'raw',
            'value'=>CHtml::Image(Yii::app()->request->baseUrl.'/images/ImagenCoordinador/'.$model->ImagenCoordinador)
            ),
	),
)); ?>
