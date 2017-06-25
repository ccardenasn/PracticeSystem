<?php
/* @var $this DocenteresponsablepracticaController */
/* @var $model Docenteresponsablepractica */

$this->pageTitle= Yii::app()->name." - "."Detalles";

$this->breadcrumbs=array(
	'Docentes Responsables de Practicas'=>array('index'),
	$model->RutResponsable,
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Editar', 'url'=>array('update', 'id'=>$model->RutResponsable)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RutResponsable),'confirm'=>'¿Está seguro de querer eliminar este elemento?')),
	array('label'=>'Administración', 'url'=>array('admin')),
    array('label'=>'Crear PDF', 'url'=>array('pdf','id'=>$model->RutResponsable)),
);
?>

<h1>Docente Responsable de Practicas: <?php echo $model->NombreResponsable; ?></h1><br>
	
<div class="collapse">
	<h3>Ayuda</h3>
	<ul align=justify>
		<ul>
			<h4>Instrucciones de Opciones</h4>
			<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
			<li>Haga click en <strong>"Añadir"</strong> para agregar un nuevo docente a la lista.</li>
			<li>Haga click en <strong>"Editar"</strong> para modificar información de docente.</li>
			<li>Haga click en <strong>"Eliminar"</strong> para borrar toda la información de docente.</li>
			<li>Desde la sección <strong>"Administración"</strong> se puede observar una lista de docentes existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en <strong>"Administración"</strong> en el panel <strong>"Opciones"</strong> para acceder.</li>
			<li>Para regresar al índice de docentes haga click en <strong>"Lista"</strong>.</li>
            <li>Haga click en <strong>"Crear PDF"</strong> para generar un documento en formato <strong>.pdf</strong> con información de docente responsable de prácticas.</li>
		</ul>
	</ul>
</div><br>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'RutResponsable',
		'NombreResponsable',
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