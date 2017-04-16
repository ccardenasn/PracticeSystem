<?php
/* @var $this ProfesorguiacpController */
/* @var $model Profesorguiacp */

$this->breadcrumbs=array(
	'Profesor Guia CP'=>array('index'),
	$model->RutProfGuiaCP,
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->RutProfGuiaCP)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RutProfGuiaCP),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Profesor Guia CP: <?php echo $model->NombreProfGuiaCP; ?></h1><br>
	
<div class="collapse">
	<h3>Ayuda</h3>
	<ul>
		<ul>
			<h4>Instrucciones de Opciones</h4>
			<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
			<li>Haga click en "Añadir" para agregar un nuevo profesor guía cp a la lista.</li>
			<li>Haga click en "Actualizar" para modificar información de profesor guía cp.</li>
			<li>Haga click en "Eliminar" para borrar toda la información de profesor guía cp.</li>
			<li>Desde la sección "Administración" se puede observar una lista de profesor guía cp existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en "Administración" en el panel "Opciones" para acceder.</li>
			<li>Para regresar al índice de profesores guías cp haga click en "Lista".</li>
		</ul>
	</ul>
</div><br>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>

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
