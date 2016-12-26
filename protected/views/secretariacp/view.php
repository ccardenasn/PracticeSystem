<?php
/* @var $this SecretariacpController */
/* @var $model Secretariacp */

$this->breadcrumbs=array(
	'Secretaria CP'=>array('index'),
	$model->RutSecretariaCP,
);

$this->menu=array(
	array('label'=>'Lista de Secretarias CP', 'url'=>array('index')),
	array('label'=>'Añadir Secretaria CP', 'url'=>array('create')),
	array('label'=>'Modificar Secretaria CP', 'url'=>array('update', 'id'=>$model->RutSecretariaCP)),
	array('label'=>'Eliminar Secretaria CP', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RutSecretariaCP),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Secretarias CP', 'url'=>array('admin')),
);
?>

<h1>Secretaria CP: <?php echo $model->RutSecretariaCP; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
        array('name'=>'Rut','value'=>$model->RutSecretariaCP),
        array('name'=>'Nombre','value'=>$model->NombreSecretariaCP),
        array('name'=>'Mail','value'=>$model->MailSecretariaCP),
        array('name'=>'Telefono','value'=>$model->TelefonoSecretariaCP),
        array('name'=>'Celular','value'=>$model->CelularSecretariaCP),
		array('name'=>'Centro de Practica','value'=>$model->CentroPractica_RBD),
		array(
            'name'=>'ImagenSecretariaCP',
			'type' => 'raw',
            'value'=>CHtml::Image(Yii::app()->request->baseUrl.'/images/ImagenSecretariasCP/'.$model->ImagenSecretariaCP)
            ),
	),
)); ?>
