<?php
/* @var $this EstudianteresponsableController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle= Yii::app()->name." - "."Estudiantes";

$this->breadcrumbs=array(
	'Estudiantes',
);

$this->menu=array(
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Estudiantes</h1><br>

<?php if(Yii::app()->user->hasFlash('message')):?>
<div class="row buttons">
	<?php echo Yii::app()->user->getFlash('message'); ?>
</div>
<?php endif; ?>

<ul align=justify>
	<h4>Instrucciones</h4>
	<li>Desde la sección <b>"Administración"</b> se puede observar una lista de estudiantes existentes, además puede visualizar la información de cada estudiante. Haga click en <b>"Administración"</b> en el panel <b>"Opciones"</b> para acceder.</li>
	<li>Haga click en <b>"Planificaciones"</b> para acceder a información correspondiente a las planificaciones de clases de cada estudiante.</li>
	<li>A continuación se puede observar una lista de estudiantes existentes además de algunos detalles, haga click en el Rut de Estudiante de color azul para más información</li>
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
