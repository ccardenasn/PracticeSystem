<?php
/* @var $this CarreraController */
/* @var $model Carrera */

$this->pageTitle= Yii::app()->name." - "."Detalles";

$this->breadcrumbs=array(
	'Carrera'=>array('index'),
	$model->NombreCarrera,
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Editar', 'url'=>array('update', 'id'=>$model->codCarrera)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->codCarrera),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Carrera: <?php echo $model->NombreCarrera; ?></h1><br>

<div class="collapse">
    <h3>Ayuda</h3>
    <ul align=justify>
        <ul>
            <h4>Instrucciones de Opciones</h4>
            <li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
            <li>Haga click en <strong>"Añadir"</strong> para agregar carrera a la lista.</li>
            <li>Haga click en <strong>"Editar"</strong> para modificar información de carrera.</li>
            <li>Haga click en <strong>"Eliminar"</strong> para borrar toda la información de carrera.</li>
            <li>Desde la sección <strong>"Administración"</strong> se puede observar una lista de carrera, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en <strong>"Administración"</strong> en el panel <strong>"Opciones"</strong> para acceder.</li>
            <li>Para regresar al índice de carreras haga click en <strong>"Lista"</strong>.</li>
        </ul>
	</ul>
</div><br>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'codCarrera',
		'NombreCarrera',
		'SemestresCarrera',
		'Universidad_NombreInstitucion',
	),
)); ?>