<?php
/* @var $this PlanificacionclaseadministradorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Planificaciones',
);

$this->menu=array(
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Planificaciones</h1><br>

<ul>
	<h4>Instrucciones</h4>
	<li>Desde la sección "Administración" se puede observar una lista de planificaciones existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en "Administración" en el panel "Opciones" para acceder.</li>
	<li>A continuación se puede observar una lista de planificaciones existentes además de algunos detalles, haga click en el Código de planificación de color azul para más información</li>
</ul>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'summaryText'=>'Viendo {start}-{end} de {count} resultados',
	'emptyText'=>'No hay resultados',
	'pager'=>array(
		'class'=>'CLinkPager',
		'header'=>'Ir a página:',
		'nextPageLabel'=>'Siguiente >',
		'prevPageLabel'=>'< Anterior',
        ),
	'itemView'=>'_view',
)); ?>
