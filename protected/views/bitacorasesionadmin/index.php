<?php
/* @var $this BitacorasesionController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle= Yii::app()->name." - "."Bitácoras";

$this->breadcrumbs=array(
	'Bitácoras',
);

$this->menu=array(
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Bitácoras</h1><br>

<ul align=justify>
	<h4>Instrucciones</h4>
	<li>Desde la sección <b>"Administración"</b> se puede observar una lista de estudiantes existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en <b>"Administración"</b> en el panel <b>"Opciones"</b> para acceder.</li>
	<li>A continuación se puede observar una lista de bitácoras existentes además de algunos detalles, haga click en código de bitácora de color azul para más información</li>
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
