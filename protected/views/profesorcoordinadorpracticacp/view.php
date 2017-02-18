<?php
/* @var $this ProfesorcoordinadorpracticacpController */
/* @var $model Profesorcoordinadorpracticacp */

$this->breadcrumbs=array(
	'Profesor Coordinador de Practicas CP'=>array('index'),
	$model->RutProfCoordGuiaCp,
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->RutProfCoordGuiaCp)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RutProfCoordGuiaCp),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Profesor Coordinador de Practicas CP: <?php echo $model->NombreProfCoordGuiaCP; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
        array('name'=>'Rut','value'=>$model->RutProfCoordGuiaCp),
        array('name'=>'Nombre','value'=>$model->NombreProfCoordGuiaCP),
        array('name'=>'Mail','value'=>$model->MailProfCoordGuiaCP),
        array('name'=>'Telefono','value'=>$model->TelefonoProfCoordGuiaCP),
        array('name'=>'Nombre','value'=>$model->CelularProfCoordGuiaCP),
        array('name'=>'RBD','value'=>$model->CentroPractica_RBD),
        array(
            'name'=>'ImagenProfCoordGuiaCP',
			'type' => 'raw',
            'value'=>CHtml::Image(Yii::app()->request->baseUrl.'/images/ImagenCoordinadoresPracticasCP/'.$model->ImagenProfCoordGuiaCP)
            ),
	),
)); ?>

<br>
<br>
<ul>
	<h4>Instrucciones de Opciones</h4>
	<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
	<li>Haga click en "Añadir" para agregar un nuevo coordinador cp a la lista.</li>
	<li>Haga click en "Actualizar" para modificar información de coordinador cp.</li>
	<li>Haga click en "Eliminar" para borrar toda la información de coordinador cp.</li>
	<li>Desde la sección "Administración" se puede observar una lista de coordinador cp existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en "Administración" en el panel "Opciones" para acceder.</li>
	<li>Para regresar al índice de coordinadores cp haga click en "Lista".</li>
</ul><br>
