<?php
/* @var $this DocenteresponsablepracticaController */
/* @var $model Docenteresponsablepractica */

$this->breadcrumbs=array(
	'Docentes Responsables de Practicas'=>array('index'),
	$model->RutResponsable,
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->RutResponsable)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RutResponsable),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Docente Responsable de Practicas: <?php echo $model->NombreResponsable; ?></h1><br>
	
<div class="collapse">
	<h3>Ayuda</h3>
	<ul>
		<ul>
			<h4>Instrucciones de Opciones</h4>
			<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
			<li>Haga click en "Añadir" para agregar un nuevo docente a la lista.</li>
			<li>Haga click en "Actualizar" para modificar información de docente.</li>
			<li>Haga click en "Eliminar" para borrar toda la información de docente.</li>
			<li>Desde la sección "Administración" se puede observar una lista de docentes existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en "Administración" en el panel "Opciones" para acceder.</li>
			<li>Para regresar al índice de docentes haga click en "Lista".</li>
		</ul>
	</ul>
</div><br>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>

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