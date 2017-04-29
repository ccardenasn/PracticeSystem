<?php
/* @var $this CentropracticaController */
/* @var $model Centropractica */

$this->breadcrumbs=array(
	'Centros de Práctica'=>array('index'),
	$model->RBD,
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Editar', 'url'=>array('update', 'id'=>$model->RBD)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RBD),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Adminsitración', 'url'=>array('admin')),
);
?>

<h1>Centro de Práctica: <?php echo $model->NombreCentroPractica; ?></h1><br>

<div class="collapse">
	<h3>Ayuda</h3>
	<ul>
		<ul>
			<h4>Instrucciones de Opciones</h4>
			<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
			<li>Haga click en <strong>"Añadir"</strong> para agregar un nuevo centro a la lista.</li>
			<li>Haga click en <strong>"Editar"</strong> para modificar información de centro.</li>
			<li>Haga click en <strong>"Eliminar"</strong> para borrar toda la información de centro.</li>
			<li>Desde la sección <strong>"Administración"</strong> se puede observar una lista de centros existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en <strong>"Administración"</strong> en el panel <strong>"Opciones"</strong> para acceder.</li>
			<li>Para regresar al índice de menciones haga click en <strong>"Lista"</strong>.</li>
		</ul>
	</ul>
</div><br>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'RBD',
		'NombreCentroPractica',
		'VigenciaProtocolo',
		'FechaProtocolo',
		array(
            'name'=>'Anexo Protocolo (click en el enlace)',
			'type' => 'raw',
            'value'=>CHtml::link(CHtml::encode($model->AnexoProtocolo), Yii::app()->baseUrl .'/PDFFiles/'.$model->AnexoProtocolo,array('target'=>'_blank'))
            ),
		'dependenciaCodDependencia.NombreDependencia',
		'nivelEducacionalCodNivel.NombreNivel',
		'Area',
		'regionCodRegion.NombreRegion',
		'provinciaCodProvincia.NombreProvincia',
		'ciudadCodCiudad.NombreCiudad',
		'Calle',
		array(
            'name'=>'ImagenCentroPractica',
			'type' => 'raw',
            'value'=>CHtml::Image(Yii::app()->request->baseUrl.'/images/ImagenCentroPracticas/'.$model->ImagenCentroPractica)
            ),
	),
)); ?>
