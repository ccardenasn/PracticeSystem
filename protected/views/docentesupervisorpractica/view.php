<?php
/* @var $this DocentesupervisorpracticaController */
/* @var $model Docentesupervisorpractica */

$this->breadcrumbs=array(
	'Docente Supervisor de Practicas'=>array('index'),
	$model->RutSupervisor,
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->RutSupervisor)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RutSupervisor),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Docente Supervisor de Practica: <?php echo $model->RutSupervisor; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
        array('name'=>'Rut','value'=>$model->RutSupervisor),
		array('name'=>'Nombre','value'=>$model->NombreSupervisor),
        array('name'=>'Clave','value'=>$model->ClaveSupervisor),
        array('name'=>'Mail','value'=>$model->MailSupervisor),
        array('name'=>'Telefono','value'=>$model->TelefonoSupervisor),
        array('name'=>'Celular','value'=>$model->CelularSupervisor),
		array(
            'name'=>'ImagenSupervisor',
			'type' => 'raw',
            'value'=>CHtml::Image(Yii::app()->request->baseUrl.'/images/ImagenSupervisor/'.$model->ImagenSupervisor)
            ),
	),
)); ?>

<br>
<br>
<ul>
	<h4>Instrucciones de Opciones</h4>
	<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
	<li>Haga click en "Añadir" para agregar un nuevo docente a la lista.</li>
	<li>Haga click en "Actualizar" para modificar información de docente.</li>
	<li>Haga click en "Eliminar" para borrar toda la información de docente.</li>
	<li>Desde la sección "Administración" se puede observar una lista de docentes existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en "Administración" en el panel "Opciones" para acceder.</li>
	<li>Para regresar al índice de docentes haga click en "Lista".</li>
</ul><br>
