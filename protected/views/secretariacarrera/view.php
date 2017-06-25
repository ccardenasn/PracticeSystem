<?php
/* @var $this SecretariacarreraController */
/* @var $model Secretariacarrera */

$this->pageTitle= Yii::app()->name." - "."Detalles";

$this->breadcrumbs=array(
	'Secretaria de Carrera'=>array('index'),
	$model->RutSecretaria,
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Editar', 'url'=>array('update', 'id'=>$model->RutSecretaria)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RutSecretaria),'confirm'=>'¿Está seguro de querer eliminar este elemento?')),
	array('label'=>'Administración', 'url'=>array('admin')),
    array('label'=>'Crear PDF', 'url'=>array('pdf','id'=>$model->RutSecretaria)),
);
?>

<h1>Secretaria de Carrera: <?php echo $model->NombreSecretaria; ?></h1><br>

<div class="collapse">
    <h3>Ayuda</h3>
    <ul align=justify>
        <ul>
            <h4>Instrucciones de Opciones</h4>
            <li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
            <li>Haga click en <strong>"Añadir"</strong> para agregar un nuevo funcionario a la lista.</li>
            <li>Haga click en <strong>"Editar"</strong> para modificar información de funcionario.</li>
            <li>Haga click en <strong>"Eliminar"</strong> para borrar toda la información de funcionario.</li>
            <li>Desde la sección <strong>"Administración"</strong> se puede observar una lista de funcionarios existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en <strong>"Administración"</strong> en el panel <strong>"Opciones"</strong> para acceder.</li>
            <li>Para regresar al índice de funcionarios haga click en <strong>"Lista"</strong>.</li>
            <li>Haga click en <strong>"Crear PDF"</strong> para generar un documento en formato <strong>.pdf</strong> con información de funcionario.</li>
        </ul>
	</ul>
</div><br>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>

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
