<?php
/* @var $this DocentesupervisorpracticaController */
/* @var $model Docentesupervisorpractica */

$this->breadcrumbs=array(
	'Docente Supervisor de Practicas'=>array('index'),
	$model->RutSupervisor,
);

$this->menu=array(
	array('label'=>'Lista de Supervisores', 'url'=>array('index')),
	array('label'=>'Añadir Supervisor', 'url'=>array('create')),
	array('label'=>'Modificar Supervisor', 'url'=>array('update', 'id'=>$model->RutSupervisor)),
	array('label'=>'Eliminar Supervisor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RutSupervisor),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Supervisores', 'url'=>array('admin')),
);
?>

<h1>Docente Supervisor de Practica: <?php echo $model->RutSupervisor; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
        array('name'=>'Rut','value'=>$model->RutSupervisor),
		array('name'=>'Nombre','value'=>$model->NombreSupervisor),
        array('name'=>'Clave','value'=>$model->ClaveSupervisor),
        array('name'=>'Mail','value'=>$model->MailSupervisor),
        array('name'=>'Telefono','value'=>$model->TelefonoSupervisor),
        array('name'=>'Celular','value'=>$model->CelularSupervisor),
		array(
            'name'=>'ImagenSupervisor',
			'type' => 'raw',
            'value'=>CHtml::Image(Yii::app()->request->baseUrl.'/images/ImagenSupervisor/'.$model->ImagenSupervisor)
            ),
	),
)); ?>
