<?php
/* @var $this ProfesorcoordinadorpracticacpController */
/* @var $model Profesorcoordinadorpracticacp */

$this->breadcrumbs=array(
	'Profesor Coordinador de Practicas CP'=>array('index'),
	$model->RutProfCoordGuiaCp,
);

$this->menu=array(
	array('label'=>'Lista de Profesores Coordinadores de Practicas CP', 'url'=>array('index')),
	array('label'=>'Añadir Profesor Coordinador de Practicas CP', 'url'=>array('create')),
	array('label'=>'Modificar Profesor Coordinador de Practicas CP', 'url'=>array('update', 'id'=>$model->RutProfCoordGuiaCp)),
	array('label'=>'Eliminar Profesor Coordinador de Practicas CP', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RutProfCoordGuiaCp),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Profesor Coordinador de Practicas CP', 'url'=>array('admin')),
);
?>

<h1>Profesor Coordinador de Practicas CP: <?php echo $model->NombreProfCoordGuiaCP; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
        array('name'=>'Rut','value'=>$model->RutProfCoordGuiaCp),
        array('name'=>'Nombre','value'=>$model->NombreProfCoordGuiaCP),
        array('name'=>'Mail','value'=>$model->MailProfCoordGuiaCP),
        array('name'=>'Telefono','value'=>$model->TelefonoProfCoordGuiaCP),
        array('name'=>'Nombre','value'=>$model->CelularProfCoordGuiaCP),
        array('name'=>'RBD','value'=>$model->CentroPractica_RBD),
        array(
            'name'=>'ImagenProfCoordGuiaCP',
			'type' => 'raw',
            'value'=>CHtml::Image(Yii::app()->request->baseUrl.'/images/ImagenCoordinadoresPracticasCP/'.$model->ImagenProfCoordGuiaCP)
            ),
	),
)); ?>
