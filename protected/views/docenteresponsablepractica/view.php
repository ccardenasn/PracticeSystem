<?php
/* @var $this DocenteresponsablepracticaController */
/* @var $model Docenteresponsablepractica */

$this->breadcrumbs=array(
	'Docentes Responsables de Practicas'=>array('index'),
	$model->RutResponsable,
);

$this->menu=array(
	array('label'=>'Lista de Docentes Responsables de Practicas', 'url'=>array('index')),
	array('label'=>'Añadir Docente Responsable de Practicas', 'url'=>array('create')),
	array('label'=>'Modificar Docente Responsable de Practicas', 'url'=>array('update', 'id'=>$model->RutResponsable)),
	array('label'=>'Eliminar Docente Responsable de Practicas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RutResponsable),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Docentes Responsables de Practicas', 'url'=>array('admin')),
);
?>

<h1>Docente Responsable de Practicas: <?php echo $model->NombreResponsable; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
        array('name'=>'Rut','value'=>$model->RutResponsable),
        array('name'=>'Nombre','value'=>$model->NombreResponsable),
        array('name'=>'Clave','value'=>$model->ClaveResponsable),
        array('name'=>'Mail','value'=>$model->MailResponsable),
        array('name'=>'Telefono','value'=>$model->TelefonoResponsable),
		array('name'=>'Celular','value'=>$model->CelularResponsable),
		array(
            'name'=>'ImagenResponsable',
			'type' => 'raw',
            'value'=>CHtml::Image(Yii::app()->request->baseUrl.'/images/ImagenDocentesResponsablesPracticas/'.$model->ImagenResponsable)
            ),
	),
)); ?>
