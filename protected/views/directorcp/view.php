<?php
/* @var $this DirectorcpController */
/* @var $model Directorcp */

$this->breadcrumbs=array(
	'Director CP'=>array('index'),
	$model->RutDirectorCP,
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->RutDirectorCP)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RutDirectorCP),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Director CP: <?php echo $model->NombreDirectorCP; ?></h1><br>
	
<div class="collapse">
	<h3>Ayuda</h3>
	<ul>
		<ul>
			<h4>Instrucciones de Opciones</h4>
			<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
			<li>Haga click en "Añadir" para agregar un nuevo director cp a la lista.</li>
			<li>Haga click en "Actualizar" para modificar información de director cp.</li>
			<li>Haga click en "Eliminar" para borrar toda la información de director cp.</li>
			<li>Desde la sección "Administración" se puede observar una lista de directores cp existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en "Administración" en el panel "Opciones" para acceder.</li>
			<li>Para regresar al índice de directores cp haga click en "Lista".</li>
		</ul>
	</ul>
</div><br>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>

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
