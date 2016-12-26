<?php
/* @var $this SecretariacarreraController */
/* @var $model Secretariacarrera */

$this->breadcrumbs=array(
	'Secretaria de Carrera'=>array('index'),
	$model->RutSecretaria,
);

$this->menu=array(
	array('label'=>'Lista de Secretaria de Carrera', 'url'=>array('index')),
	array('label'=>'Añadir Secretaria de Carrera', 'url'=>array('create')),
	array('label'=>'Modificar Secretaria de Carrera', 'url'=>array('update', 'id'=>$model->RutSecretaria)),
	array('label'=>'Eliminar Secretaria de Carrera', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RutSecretaria),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Secretaria de Carrera', 'url'=>array('admin')),
);
?>

<h1>Secretaria de Carrera: <?php echo $model->NombreSecretaria; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
        array('name'=>'Rut','value'=>$model->RutSecretaria),
        array('name'=>'Nombre','value'=>$model->NombreSecretaria),
        array('name'=>'Mail','value'=>$model->MailSecretaria),
        array('name'=>'Telefono','value'=>$model->TelefonoSecretaria),
        array('name'=>'Celular','value'=>$model->CelularSecretaria),
		array(
            'name'=>'ImagenSecretaria',
			'type' => 'raw',
            'value'=>CHtml::Image(Yii::app()->request->baseUrl.'/images/ImagenSecretaria/'.$model->ImagenSecretaria)
            ),
	),
)); ?>
