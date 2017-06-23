<?php
/* @var $this PerfildocenteresponsablepracticaController */
/* @var $model Perfildocenteresponsablepractica */

$this->pageTitle= Yii::app()->name." - "."Perfil";

$this->breadcrumbs=array(
	$model->RutResponsable,
);

$this->menu=array(
	array('label'=>'Editar', 'url'=>array('update', 'id'=>$model->RutResponsable)),
);
?>

<h1>Docente Responsable de Prácticas: <?php echo $model->NombreResponsable; ?></h1><br>
	
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
		'RutResponsable',
		'NombreResponsable',
		'ClaveResponsable',
		'MailResponsable',
		'TelefonoResponsable',
		'CelularResponsable',
        array(
            'name'=>'ImagenResponsable',
			'type' => 'raw',
            'value'=>CHtml::Image(Yii::app()->request->baseUrl.'/images/ImagenDocentesResponsablesPracticas/'.$model->ImagenResponsable,"Sin Imagen Disponible",array('onerror'=>"if (this.src != '".Yii::app()->request->baseUrl."/images/FormImages/userplaceholder.jpg"."') this.src = '".Yii::app()->request->baseUrl."/images/FormImages/userplaceholder.jpg"."';",'width'=>'200px','height'=>'200px')),
            ),
	),
)); ?>
