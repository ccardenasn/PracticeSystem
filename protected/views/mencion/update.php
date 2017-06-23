<?php
/* @var $this MencionController */
/* @var $model Mencion */

$this->pageTitle= Yii::app()->name." - "."Editar";

$this->breadcrumbs=array(
	'Menciones'=>array('index'),
	$model->NombreMencion=>array('view','id'=>$model->NombreMencion),
	'Editar',
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Detalles', 'url'=>array('view', 'id'=>$model->NombreMencion)),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Modificar Mención: <?php echo $model->NombreMencion; ?></h1><br>

<div class="collapse">
    <h3>Ayuda</h3>
    <ul align=justify>
        <ul>
            <h4>Instrucciones de Opciones</h4>
            <li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
            <li>Para regresar al índice de menciones haga click en <strong>"Lista"</strong>.</li>
            <li>Haga click en <strong>"Añadir"</strong> para agregar una nueva mención a la lista.</li>
            <li>Haga click en <strong>"Detalles"</strong> para visualizar información de mención.</li>
            <li>Haga click en <strong>"Eliminar"</strong> para borrar toda la información de la mención.</li>
            <li>Desde la sección <strong>"Administración"</strong> se puede observar una lista de las menciones existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en <strong>"Administración"</strong> en el panel <strong>"Opciones"</strong> para acceder.</li>
        </ul>
	</ul>
</div><br>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>