<?php
/* @var $this SecretariacpController */
/* @var $model Secretariacp */

$this->breadcrumbs=array(
	'Secretaria CP'=>array('index'),
	$model->RutSecretariaCP,
);

$this->menu=array(
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->RutSecretariaCP)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RutSecretariaCP),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administración', 'url'=>array('admin')),
	array('label'=>'Lista', 'url'=>array('index')),
);
?>

<h1>Secretaria CP: <?php echo $model->RutSecretariaCP; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
        array('name'=>'Rut','value'=>$model->RutSecretariaCP),
        array('name'=>'Nombre','value'=>$model->NombreSecretariaCP),
        array('name'=>'Mail','value'=>$model->MailSecretariaCP),
        array('name'=>'Telefono','value'=>$model->TelefonoSecretariaCP),
        array('name'=>'Celular','value'=>$model->CelularSecretariaCP),
		array('name'=>'Centro de Practica','value'=>$model->CentroPractica_RBD),
		array(
            'name'=>'ImagenSecretariaCP',
			'type' => 'raw',
            'value'=>CHtml::Image(Yii::app()->request->baseUrl.'/images/ImagenSecretariasCP/'.$model->ImagenSecretariaCP)
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
