<?php
/* @var $this DocentecoordinadorpracticasController */
/* @var $model Docentecoordinadorpracticas */

$this->breadcrumbs=array(
	'Docente Coordinador de Practicas'=>array('index'),
	$model->RutCoordinador,
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Modificar', 'url'=>array('update', 'id'=>$model->RutCoordinador)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RutCoordinador),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Docente Coordinador de Practicas: <?php echo $model->NombreCoordinador; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
        array('name'=>'Rut','value'=>$model->RutCoordinador),
        array('name'=>'Nombre','value'=>$model->NombreCoordinador),
        array('name'=>'Clave','value'=>$model->ClaveCoordinador),
        array('name'=>'Mail','value'=>$model->MailCoordinador),
        array('name'=>'Telefono','value'=>$model->TelefonoCoordinador),
        array('name'=>'Celular','value'=>$model->CelularCoordinador),
		array(
            'name'=>'ImagenCoordinador',
			'type' => 'raw',
            'value'=>CHtml::Image(Yii::app()->request->baseUrl.'/images/ImagenCoordinador/'.$model->ImagenCoordinador)
            ),
	),
)); ?>

<br>
<br>
<ul>
	<h4>Instrucciones de Opciones</h4>
	<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
	<li>Haga click en "Añadir" para agregar un nuevo coordinador a la lista.</li>
	<li>Haga click en "Actualizar" para modificar información de coordinador.</li>
	<li>Haga click en "Eliminar" para borrar toda la información de coordinador.</li>
	<li>Desde la sección "Administración" se puede observar una lista de coordinador existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en "Administración" en el panel "Opciones" para acceder.</li>
	<li>Para regresar al índice de coordinadores haga click en "Lista".</li>
</ul><br>
