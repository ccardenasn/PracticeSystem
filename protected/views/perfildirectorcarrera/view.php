<?php
/* @var $this PerfildirectorcarreraController */
/* @var $model Perfildirectorcarrera */

$this->breadcrumbs=array(
	$model->RutDirector,
);

$this->menu=array(
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->RutDirector)),
);
?>

<h1>Director de Carrera: <?php echo $model->NombreDirector; ?></h1><br>

<div class="collapse">
	<h3>Ayuda</h3>
	<ul>
		<ul>
			<h4>Instrucciones de Opciones</h4>
			<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
			<li>Haga click en <strong>"Editar"</strong> para modificar información de perfil.</li>
		</ul>
	</ul>
</div><br>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'RutDirector',
		'NombreDirector',
		'ClaveDirector',
		'MailDirector',
		'TelefonoDirector',
		'CelularDirector',
		array(
            'name'=>'ImagenDirector',
			'type' => 'raw',
            'value'=>CHtml::Image(Yii::app()->request->baseUrl.'/images/ImagenDirector/'.$model->ImagenDirector)
            ),
	),
)); ?>
