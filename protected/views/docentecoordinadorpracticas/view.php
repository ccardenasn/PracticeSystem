<?php
/* @var $this DocentecoordinadorpracticasController */
/* @var $model Docentecoordinadorpracticas */

$this->breadcrumbs=array(
	'Docente Coordinador de Practicas'=>array('index'),
	$model->RutCoordinador,
);

$this->menu=array(
	array('label'=>'Lista de Docentes Coordinadores de Practicas', 'url'=>array('index')),
	array('label'=>'Añadir Docente Coordinador de Practicas', 'url'=>array('create')),
	array('label'=>'Modificar Docente Coordinador de Practicas', 'url'=>array('update', 'id'=>$model->RutCoordinador)),
	array('label'=>'Eliminar Docente Coordinador de Practicas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RutCoordinador),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Docente Coordinador de Practicas', 'url'=>array('admin')),
);
?>

<h1>Docente Coordinador de Practicas: <?php echo $model->NombreCoordinador; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
        array('name'=>'Rut','value'=>$model->RutCoordinador),
        array('name'=>'Nombre','value'=>$model->NombreCoordinador),
        array('name'=>'Clave','value'=>$model->ClaveCoordinador),
        array('name'=>'Mail','value'=>$model->MailCoordinador),
        array('name'=>'Telefono','value'=>$model->TelefonoCoordinador),
        array('name'=>'Celular','value'=>$model->CelularCoordinador),
		array(
            'name'=>'ImagenCoordinador',
			'type' => 'raw',
            'value'=>CHtml::Image(Yii::app()->request->baseUrl.'/images/ImagenCoordinador/'.$model->ImagenCoordinador)
            ),
	),
)); ?>
