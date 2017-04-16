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
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->RutJefeUTPCP)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RutJefeUTPCP),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Jefe UTP CP: <?php echo $model->NombreJefeUTPCP; ?></h1><br>
	
<div class="collapse">
	<h3>Ayuda</h3>
	<ul>
		<ul>
			<h4>Instrucciones de Opciones</h4>
			<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
			<li>Haga click en "Añadir" para agregar un nuevo jefe utp cp a la lista.</li>
			<li>Haga click en "Actualizar" para modificar información de jefe utp cp.</li>
			<li>Haga click en "Eliminar" para borrar toda la información de jefe utp cp.</li>
			<li>Desde la sección "Administración" se puede observar una lista de jefes utp cp existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en "Administración" en el panel "Opciones" para acceder.</li>
			<li>Para regresar al índice de jefes utp cp haga click en "Lista".</li>
		</ul>
	</ul>
</div><br>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
        array('name'=>'Rut','value'=>$model->RutJefeUTPCP),
        array('name'=>'Nombre','value'=>$model->NombreJefeUTPCP),
        array('name'=>'Mail','value'=>$model->MailJefeUTPCP),
        array('name'=>'Telefono','value'=>$model->TelefonoJefeUTPCP),
        array('name'=>'Celular','value'=>$model->CelularJefeUTPCP),
        array('name'=>'Centro de Practica','value'=>$model->CentroPractica_RBD),
        array(
            'name'=>'ImagenJefeUTPCP',
			'type' => 'raw',
            'value'=>CHtml::Image(Yii::app()->request->baseUrl.'/images/ImagenJefesUTPCP/'.$model->ImagenJefeUTPCP)
            ),
	),
)); ?>
