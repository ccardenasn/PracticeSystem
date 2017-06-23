<?php
/* @var $this EstudianteController */
/* @var $model Estudiante */

$this->pageTitle= Yii::app()->name." - "."Editar";

$this->breadcrumbs=array(
	'Estudiantes'=>array('index'),
	$model->RutEstudiante=>array('view','id'=>$model->RutEstudiante),
	'Editar',
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Detalles', 'url'=>array('view', 'id'=>$model->RutEstudiante)),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Modificar Estudiante: <?php echo $model->NombreEstudiante; ?></h1><br>

<div class="collapse">
	<h3>Ayuda</h3>
	<ul align=justify>
		<ul>
			<h4>Instrucciones de Opciones</h4>
			<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
			<li>Para regresar al índice de estudiantes haga click en <strong>"Lista"</strong>.</li>
			<li>Haga click en <strong>"Añadir"</strong> para agregar un nuevo estudiante a la lista.</li>
			<li>Haga click en <strong>"Detalles"</strong> para visualizar información de estudiante.</li>
			<li>Desde la sección <strong>"Administración"</strong> se puede observar una lista de estudiantes existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en <strong>"Administración"</strong> en el panel <strong>"Opciones"</strong> para acceder.</li>
		</ul>
	</ul>
</div><br>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>