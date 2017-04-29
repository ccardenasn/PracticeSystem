<?php
/* @var $this DirectorcarreraController */
/* @var $model Directorcarrera */

$this->breadcrumbs=array(
	'Director de Carrera'=>array('index'),
	$model->RutDirector,
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Editar', 'url'=>array('update', 'id'=>$model->RutDirector)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RutDirector),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Director de Carrera: <?php echo $model->NombreDirector; ?></h1><br>

<div class="collapse">
	<h3>Ayuda</h3>
	<ul>
		<ul>
			<h4>Instrucciones de Opciones</h4>
			<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
			<li>Haga click en <strong>"Añadir"</strong> para agregar un nuevo director a la lista.</li>
			<li>Haga click en <strong>"Editar"</strong> para modificar información de director.</li>
			<li>Haga click en <strong>"Eliminar"</strong> para borrar toda la información de director.</li>
			<li>Desde la sección <strong>"Administración"</strong> se puede observar una lista de directores existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en <strong>"Administración"</strong> en el panel <strong>"Opciones"</strong> para acceder.</li>
			<li>Para regresar al índice de menciones haga click en <strong>"Lista"</strong>.</li>
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