<?php
/* @var $this CarreraController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle= Yii::app()->name." - "."Carrera";

$this->breadcrumbs=array(
	'Carrera',
);

$this->menu=array(
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Carrera</h1><br>

<?php if(Yii::app()->user->hasFlash('message')):?>
<div class="row buttons">
	<?php echo Yii::app()->user->getFlash('message'); ?>
</div>
<?php endif; ?>

<ul align=justify>
	<h4>Instrucciones</h4>
	<li>Para agregar carrera haga click en la opción <strong>"Añadir"</strong> situada en el panel de opciones ubicado al lado derecho de la ventana.</li>
	<li>Desde la sección <strong>"Administración"</strong> se puede observar una lista de carreras existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en <strong>"Administración"</strong> en el panel <strong>"Opciones"</strong> para acceder.</li>
	<li>A continuación se puede observar una lista de carreras existentes además de algunos detalles, haga click en el Código de Carrera de color azul para más información</li>
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
