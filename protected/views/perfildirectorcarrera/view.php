<?php
/* @var $this DirectorcarreraController */
/* @var $model Directorcarrera */

$this->breadcrumbs=array($model->RutDirector);

$this->menu=array(
	array('label'=>'Modificar Director de Carrera', 'url'=>array('update', 'id'=>$model->RutDirector)),
);
?>

<h1>Director de Carrera: <?php echo $model->NombreDirector; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
        array('name'=>'Rut','value'=>$model->RutDirector),
        array('name'=>'Nombre','value'=>$model->NombreDirector),
        array('name'=>'Clave','value'=>$model->ClaveDirector),
        array('name'=>'Mail','value'=>$model->MailDirector),
		array('name'=>'Telefono','value'=>$model->TelefonoDirector),
        array('name'=>'Celular','value'=>$model->CelularDirector),
        array(
            'name'=>'ImagenDirector',
			'type' => 'raw',
            'value'=>CHtml::Image(Yii::app()->request->baseUrl.'/images/ImagenDirector/'.$model->ImagenDirector)
            ),
	),
)); ?>
