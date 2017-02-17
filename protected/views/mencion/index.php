<?php
/* @var $this MencionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Menciones',
);

$this->menu=array(
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Menciones</h1><br>

<ul>
	<h4>Instrucciones</h4>
	<li>Para agregar una nueva mención haga click en la opción "Añadir" situada en el panel de opciones ubicado al lado derecho de la ventana.</li>
	<li>Desde la sección "Administración" se puede observar una lista de las menciones existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en "Administración" en el panel "Opciones" para acceder.</li>
	<li>A continuación se puede obervar una lista de las menciones existentes además de algunos detalles, haga click en el nombre de mención de color azul para más información</li>
</ul>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'summaryText'=>'Viendo {start}-{end} de {count} resultados',
	'emptyText'=>'No hay resultados',
	'itemView'=>'_view',
)); ?>
