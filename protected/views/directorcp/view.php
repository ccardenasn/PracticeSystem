<?php
/* @var $this DirectorcpController */
/* @var $model Directorcp */

$this->breadcrumbs=array(
	'Director CP'=>array('index'),
	$model->RutDirectorCP,
);

$this->menu=array(
	array('label'=>'Lista de Directores CP', 'url'=>array('index')),
	array('label'=>'Añadir Director CP', 'url'=>array('create')),
	array('label'=>'Modificar Director CP', 'url'=>array('update', 'id'=>$model->RutDirectorCP)),
	array('label'=>'Eliminar Director CP', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RutDirectorCP),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Director CP', 'url'=>array('admin')),
);
?>

<h1>Director CP: <?php echo $model->NombreDirectorCP; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
        array('name'=>'Rut','value'=>$model->RutDirectorCP),
        array('name'=>'Nombre','value'=>$model->NombreDirectorCP),
        array('name'=>'Mail','value'=>$model->MailDirectorCP),
        array('name'=>'Telefono','value'=>$model->TelefonoDirectorCP),
        array('name'=>'Celular','value'=>$model->CelularDirectorCP),
		array('name'=>'Centro de Practica','value'=>$model->CentroPractica_RBD),
		array(
            'name'=>'ImagenDirectorCP',
			'type' => 'raw',
            'value'=>CHtml::Image(Yii::app()->request->baseUrl.'/images/ImagenDirectoresCP/'.$model->ImagenDirectorCP)
            ),
	),
)); ?>
