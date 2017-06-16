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
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RutSecretaria),'confirm'=>'¿Está seguro de querer eliminar este elemento?')),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Secretaria de Carrera: <?php echo $model->NombreSecretaria; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'RutSecretaria',
		'NombreSecretaria',
		'MailSecretaria',
		'TelefonoSecretaria',
		'CelularSecretaria',
        array(
            'name'=>'ImagenSecretaria',
			'type' => 'raw',
            'value'=>CHtml::Image(Yii::app()->request->baseUrl.'/images/ImagenSecretaria/'.$model->ImagenSecretaria,"Sin Imagen Disponible",array('onerror'=>"if (this.src != '".Yii::app()->request->baseUrl."/images/FormImages/userplaceholder.jpg"."') this.src = '".Yii::app()->request->baseUrl."/images/FormImages/userplaceholder.jpg"."';",'width'=>'200px','height'=>'200px')),
            ),
		array('name'=>'Carrera_codCarrera','value'=>$model->carreraCodCarrera->NombreCarrera),
	),
)); ?>

<br>
<br>
<ul align=justify>
	<h4>Instrucciones de Opciones</h4>
	<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
	<li>Haga click en "Añadir" para agregar un nuevo funcionario a la lista.</li>
	<li>Haga click en "Actualizar" para modificar información de funcionario.</li>
	<li>Haga click en "Eliminar" para borrar toda la información de funcionario.</li>
	<li>Desde la sección "Administración" se puede observar una lista de funcionarios existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en "Administración" en el panel "Opciones" para acceder.</li>
	<li>Para regresar al índice de funcionarios haga click en "Lista".</li>
</ul><br>
