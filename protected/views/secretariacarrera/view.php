<?php
/* @var $this SecretariacarreraController */
/* @var $model Secretariacarrera */

$this->breadcrumbs=array(
	'Secretaria de Carrera'=>array('index'),
	$model->RutSecretaria,
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->RutSecretaria)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RutSecretaria),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Secretaria de Carrera: <?php echo $model->NombreSecretaria; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
        array('name'=>'Rut','value'=>$model->RutSecretaria),
        array('name'=>'Nombre','value'=>$model->NombreSecretaria),
        array('name'=>'Mail','value'=>$model->MailSecretaria),
        array('name'=>'Telefono','value'=>$model->TelefonoSecretaria),
        array('name'=>'Celular','value'=>$model->CelularSecretaria),
		array(
            'name'=>'ImagenSecretaria',
			'type' => 'raw',
            'value'=>CHtml::Image(Yii::app()->request->baseUrl.'/images/ImagenSecretaria/'.$model->ImagenSecretaria)
            ),
	),
)); ?>

<br>
<br>
<ul>
	<h4>Instrucciones de Opciones</h4>
	<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
	<li>Haga click en "Añadir" para agregar un nuevo funcionario a la lista.</li>
	<li>Haga click en "Actualizar" para modificar información de funcionario.</li>
	<li>Haga click en "Eliminar" para borrar toda la información de funcionario.</li>
	<li>Desde la sección "Administración" se puede observar una lista de funcionarios existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en "Administración" en el panel "Opciones" para acceder.</li>
	<li>Para regresar al índice de funcionarios haga click en "Lista".</li>
</ul><br>
