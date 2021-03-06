<?php
/* @var $this DocentesupervisorpracticaController */
/* @var $model Docentesupervisorpractica */

$this->breadcrumbs=array(
	'Docente Supervisor de Prácticas'=>array('index'),
	$model->RutSupervisor=>array('view','id'=>$model->RutSupervisor),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'List', 'url'=>array('index')),
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Detalles', 'url'=>array('view', 'id'=>$model->RutSupervisor)),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Modificar Docente Supervisor de Práctica: <?php echo $model->NombreSupervisor; ?></h1><br>

<div class="collapse">
	<h3>Ayuda</h3>
	<ul>
		<ul>
			<h4>Instrucciones de Opciones</h4>
			<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
			<li>Para regresar al índice de docentes haga click en <b>"Lista"</b>.</li>
			<li>Haga click en <b>"Añadir"</b> para agregar un nuevo docente a la lista.</li>
			<li>Haga click en <b>"Detalles"</b> para visualizar información de funcionario.</li>
			<li>Desde la sección <b>"Administración"</b> se puede observar una lista de docentes existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en <b>"Administración"</b> en el panel <b>"Opciones"</b> para acceder.</li>
		</ul>
	</ul>
</div><br>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>