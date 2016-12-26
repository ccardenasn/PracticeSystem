<?php
/* @var $this DirectorcarreraController */
/* @var $model Directorcarrera */

$this->breadcrumbs=array(
	'Director de Carrera'=>array('index'),
	$model->RutDirector,
);

$this->menu=array(
	array('label'=>'Lista de Directores de Carrera', 'url'=>array('index')),
	array('label'=>'Añadir Director de Carrera', 'url'=>array('create')),
	array('label'=>'Modificar Director de Carrera', 'url'=>array('update', 'id'=>$model->RutDirector)),
	array('label'=>'Eliminar Director de Carrera', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RutDirector),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Directores de Carrera', 'url'=>array('admin')),
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
