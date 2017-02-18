<?php
/* @var $this DocenteresponsablepracticaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Docentes Responsables de Practicas',
);

$this->menu=array(
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Docentes Responsables de Practicas</h1><br>

<ul>
	<h4>Instrucciones</h4>
	<li>Para agregar un nuevo docente haga click en la opción "Añadir" situada en el panel de opciones ubicado al lado derecho de la ventana.</li>
	<li>Desde la sección "Administración" se puede observar una lista de docentes existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en "Administración" en el panel "Opciones" para acceder.</li>
	<li>A continuación se puede observar una lista de docentes existentes además de algunos detalles, haga click en el Rut de docente de color azul para más información</li>
</ul>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'summaryText'=>'Viendo {start}-{end} de {count} resultados',
	'emptyText'=>'No hay resultados',
	'itemView'=>'_view',
)); ?>
