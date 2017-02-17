<?php
/* @var $this EstudianteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Estudiantes',
);

$this->menu=array(
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Administración', 'url'=>array('admin')),
	array('label'=>'Planificaciones', 'url'=>array('planificacionclaseadministrador/admin')),
);
?>

<h1>Estudiantes</h1><br>

<ul>
	<h4>Instrucciones</h4>
	<li>Para agregar un nuevo estudiante haga click en la opción "Añadir" situada en el panel de opciones ubicado al lado derecho de la ventana.</li>
	<li>Desde la sección "Administración" se puede observar una lista de estudiantes existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en "Administración" en el panel "Opciones" para acceder.</li>
	<li>Haga click en "Planificaciones" para acceder a información correspondiente a las planificaciones de clases de cada estudiante.</li>
	<li>A continuación se puede obervar una lista de estudiantes existentes además de algunos detalles, haga click en el Rut de Estudiante de color azul para más información</li>
</ul>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>