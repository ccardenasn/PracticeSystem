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
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->RBD)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RBD),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Adminsitración', 'url'=>array('admin')),
);
?>

<h1>Centro de Práctica: <?php echo $model->NombreCentroPractica; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'RBD',
        array('name'=>'Nombre','value'=>$model->NombreCentroPractica),
		array('name'=>'VigenciaProtocolo','value'=>$model->VigenciaProtocolo),
        array('name'=>'FechaProtocolo','value'=>$model->FechaProtocolo),
        array(
            'name'=>'Anexo Protocolo (click en el enlace)',
			'type' => 'raw',
            'value'=>CHtml::link(CHtml::encode($model->AnexoProtocolo), Yii::app()->baseUrl .'/PDFFiles/'.$model->AnexoProtocolo,array('target'=>'_blank'))
            ),
		'Dependencia',
        array('name'=>'Nivel Educacional','value'=>$model->NivelEducacional),
		'Area',
        array('name'=>'Region','value'=>$model->regionCodRegion->NombreRegion),
        array('name'=>'Provincia','value'=>$model->provinciaCodProvincia->NombreProvincia),
        array('name'=>'Ciudad','value'=>$model->ciudadCodCiudad->NombreCiudad),
		'Calle',
	),
)); ?>

<br>
<br>
<ul>
	<h4>Instrucciones de Opciones</h4>
	<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
	<li>Haga click en "Añadir" para agregar un nuevo centro a la lista.</li>
	<li>Haga click en "Actualizar" para modificar información de centro.</li>
	<li>Haga click en "Eliminar" para borrar toda la información de centro.</li>
	<li>Desde la sección "Administración" se puede observar una lista de centros existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en "Administración" en el panel "Opciones" para acceder.</li>
	<li>Para regresar al índice de menciones haga click en "Lista".</li>
</ul><br>