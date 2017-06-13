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
	array('label'=>'Editar', 'url'=>array('update', 'id'=>$model->RutProfGuiaCP)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RutProfGuiaCP),'confirm'=>'¿Está seguro de querer eliminar este elemento?')),
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
			<li>Haga click en <strong>"Añadir"</strong> para agregar un nuevo profesor guía cp a la lista.</li>
			<li>Haga click en <strong>"Actualizar"</strong> para modificar información de profesor guía cp.</li>
			<li>Haga click en <strong>"Eliminar"</strong> para borrar toda la información de profesor guía cp.</li>
			<li>Desde la sección <strong>"Administración"</strong> se puede observar una lista de profesor guía cp existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en <strong>"Administración"</strong> en el panel <strong>"Opciones"</strong> para acceder.</li>
			<li>Para regresar al índice de profesores guías cp haga click en <strong>"Lista"</strong>.</li>
		</ul>
	</ul>
</div><br>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'RutProfGuiaCP',
		'NombreProfGuiaCP',
		'CursoProfGuiaCP',
		'ProfesorJefeProfGuiaCP',
		'MailProfGuiaCP',
		'TelefonoProfGuiaCP',
		'CelularProfGuiaCP',
		'centroPracticaRBD.NombreCentroPractica',
        array(
            'name'=>'ImagenProfGuiaCP',
			'type' => 'raw',
            'value'=>CHtml::Image(Yii::app()->request->baseUrl.'/images/ImagenProfesoresGuiaCP/'.$model->ImagenProfGuiaCP,"Sin Imagen Disponible",array('onerror'=>"if (this.src != '".Yii::app()->request->baseUrl."/images/FormImages/userplaceholder.jpg"."') this.src = '".Yii::app()->request->baseUrl."/images/FormImages/userplaceholder.jpg"."';",'width'=>'200px','height'=>'200px')),
            ),
	),
)); ?>
