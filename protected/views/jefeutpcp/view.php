<?php
/* @var $this JefeutpcpController */
/* @var $model Jefeutpcp */

$this->breadcrumbs=array(
	'Jefe UTP CP'=>array('index'),
	$model->RutJefeUTPCP,
);

$this->menu=array(
	array('label'=>'Lista de Jefes UTP CP', 'url'=>array('index')),
	array('label'=>'Añadir Jefe UTP CP', 'url'=>array('create')),
	array('label'=>'Modificar Jefe UTP CP', 'url'=>array('update', 'id'=>$model->RutJefeUTPCP)),
	array('label'=>'Eliminar Jefe UTP CP', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RutJefeUTPCP),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Jefe UTP CP', 'url'=>array('admin')),
);
?>

<h1>Jefe UTP CP: <?php echo $model->RutJefeUTPCP; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
        array('name'=>'Rut','value'=>$model->RutJefeUTPCP),
        array('name'=>'Nombre','value'=>$model->NombreJefeUTPCP),
        array('name'=>'Mail','value'=>$model->MailJefeUTPCP),
        array('name'=>'Telefono','value'=>$model->TelefonoJefeUTPCP),
        array('name'=>'Celular','value'=>$model->CelularJefeUTPCP),
        array('name'=>'Centro de Practica','value'=>$model->CentroPractica_RBD),
        array(
            'name'=>'ImagenJefeUTPCP',
			'type' => 'raw',
            'value'=>CHtml::Image(Yii::app()->request->baseUrl.'/images/ImagenJefesUTPCP/'.$model->ImagenJefeUTPCP)
            ),
	),
)); ?>
