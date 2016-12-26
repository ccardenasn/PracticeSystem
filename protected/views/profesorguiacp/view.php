<?php
/* @var $this ProfesorguiacpController */
/* @var $model Profesorguiacp */

$this->breadcrumbs=array(
	'Profesor Guia CP'=>array('index'),
	$model->RutProfGuiaCP,
);

$this->menu=array(
	array('label'=>'Lista de Profesor Guia CP', 'url'=>array('index')),
	array('label'=>'Añadir Profesor Guia CP', 'url'=>array('create')),
	array('label'=>'Modificar Profesor Guia CP', 'url'=>array('update', 'id'=>$model->RutProfGuiaCP)),
	array('label'=>'Eliminar Profesor Guia CP', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RutProfGuiaCP),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Profesor Guia CP', 'url'=>array('admin')),
);
?>

<h1>Profesor Guia CP: <?php echo $model->NombreProfGuiaCP; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
        array('name'=>'Rut','value'=>$model->RutProfGuiaCP),
		array('name'=>'Nombre','value'=>$model->NombreProfGuiaCP),
        array('name'=>'Curso','value'=>$model->CursoProfGuiaCP),
        array('name'=>'Profesor Jefe','value'=>$model->ProfesorJefeProfGuiaCP),
        array('name'=>'Mail','value'=>$model->MailProfGuiaCP),
        array('name'=>'Telefono','value'=>$model->TelefonoProfGuiaCP),
        array('name'=>'Celular','value'=>$model->CelularProfGuiaCP),
        array('name'=>'Centro Practica','value'=>$model->CentroPractica_RBD),
        array(
            'name'=>'ImagenProfGuiaCP',
			'type' => 'raw',
            'value'=>CHtml::Image(Yii::app()->request->baseUrl.'/images/ImagenProfesoresGuiaCP/'.$model->ImagenProfGuiaCP)
            ),
	),
)); ?>
