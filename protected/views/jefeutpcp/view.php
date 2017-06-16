<?php
/* @var $this JefeutpcpController */
/* @var $model Jefeutpcp */

$this->breadcrumbs=array(
	'Jefe UTP CP'=>array('index'),
	$model->RutJefeUTPCP,
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Editar', 'url'=>array('update', 'id'=>$model->RutJefeUTPCP)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RutJefeUTPCP),'confirm'=>'¿Está seguro de querer eliminar este elemento?')),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Jefe UTP CP: <?php echo $model->NombreJefeUTPCP; ?></h1><br>
	
<div class="collapse">
	<h3>Ayuda</h3>
	<ul align=justify>
		<ul>
			<h4>Instrucciones de Opciones</h4>
			<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
			<li>Haga click en <strong>"Añadir"</strong> para agregar un nuevo jefe utp cp a la lista.</li>
			<li>Haga click en <strong>"Editar"</strong> para modificar información de jefe utp cp.</li>
			<li>Haga click en <strong>"Eliminar"</strong> para borrar toda la información de jefe utp cp.</li>
			<li>Desde la sección <strong>"Administración"</strong> se puede observar una lista de jefes utp cp existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en <strong>"Administración"</strong> en el panel <strong>"Opciones"</strong> para acceder.</li>
			<li>Para regresar al índice de jefes utp cp haga click en <strong>"Lista"</strong>.</li>
		</ul>
	</ul>
</div><br>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'RutJefeUTPCP',
		'NombreJefeUTPCP',
		'MailJefeUTPCP',
		'TelefonoJefeUTPCP',
		'CelularJefeUTPCP',
		'centroPracticaRBD.NombreCentroPractica',
        array(
            'name'=>'ImagenJefeUTPCP',
			'type' => 'raw',
            'value'=>CHtml::Image(Yii::app()->request->baseUrl.'/images/ImagenJefesUTPCP/'.$model->ImagenJefeUTPCP,"Sin Imagen Disponible",array('onerror'=>"if (this.src != '".Yii::app()->request->baseUrl."/images/FormImages/userplaceholder.jpg"."') this.src = '".Yii::app()->request->baseUrl."/images/FormImages/userplaceholder.jpg"."';",'width'=>'200px','height'=>'200px')),
            ),
	),
)); ?>
