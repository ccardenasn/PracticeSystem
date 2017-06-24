<?php
/* @var $this DocentecoordinadorpracticasController */
/* @var $model Docentecoordinadorpracticas */

$this->pageTitle= Yii::app()->name." - "."Detalles";

$this->breadcrumbs=array(
	'Docente Coordinador de Practicas'=>array('index'),
	$model->RutCoordinador,
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Editar', 'url'=>array('update', 'id'=>$model->RutCoordinador)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RutCoordinador),'confirm'=>'¿Está seguro de querer eliminar este elemento?')),
	array('label'=>'Administración', 'url'=>array('admin')),
    array('label'=>'Crear PDF', 'url'=>array('pdf','id'=>$model->RutCoordinador)),
);
?>

<h1>Docente Coordinador de Practicas: <?php echo $model->NombreCoordinador; ?></h1><br>
	
<div class="collapse">
	<h3>Ayuda</h3>
	<ul align=justify>
		<ul>
			<h4>Instrucciones de Opciones</h4>
			<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
			<li>Haga click en <strong>"Añadir"</strong> para agregar un nuevo coordinador a la lista.</li>
			<li>Haga click en <strong>"Editar"</strong> para modificar información de coordinador.</li>
			<li>Haga click en <strong>"Eliminar"</strong> para borrar toda la información de coordinador.</li>
			<li>Desde la sección <strong>"Administración"</strong> se puede observar una lista de coordinador existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en <strong>"Administración"</strong> en el panel <strong>"Opciones"</strong> para acceder.</li>
			<li>Para regresar al índice de coordinadores haga click en <strong>"Lista"</strong>.</li>
		</ul>
	</ul>
</div><br>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'RutCoordinador',
		'NombreCoordinador',
		'MailCoordinador',
		'TelefonoCoordinador',
		'CelularCoordinador',
        array(
            'name'=>'ImagenCoordinador',
			'type' => 'raw',
            'value'=>CHtml::Image(Yii::app()->request->baseUrl.'/images/ImagenCoordinador/'.$model->ImagenCoordinador,"Sin Imagen Disponible",array('onerror'=>"if (this.src != '".Yii::app()->request->baseUrl."/images/FormImages/userplaceholder.jpg"."') this.src = '".Yii::app()->request->baseUrl."/images/FormImages/userplaceholder.jpg"."';",'width'=>'200px','height'=>'200px')),
            ),
	),
)); ?>