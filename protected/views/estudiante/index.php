<?php
/* @var $this EstudianteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Estudiantes',
);

$this->menu=array(
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Administración', 'url'=>array('admin')),
	array('label'=>'Planificaciones', 'url'=>array('planificacionclaseadministrador/index')),
	array('label'=>'Importar Lista', 'url'=>array('readExcel')),
);
?>

<h1>Estudiantes</h1><br>

<?php if(Yii::app()->user->hasFlash('message')):?>
<div class="row buttons">
	<?php echo Yii::app()->user->getFlash('message'); ?>
</div>
<?php endif; ?>

<ul>
	<h4>Instrucciones</h4>
	<li>Para agregar un nuevo estudiante haga click en la opción <b>"Añadir"</b> situada en el panel de opciones ubicado al lado derecho de la ventana.</li>
	<li>Desde la sección <b>"Administración"</b> se puede observar una lista de estudiantes existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en <b>"Administración"</b> en el panel <b>"Opciones"</b> para acceder.</li>
	<li>Haga click en <b>"Planificaciones"</b> para acceder a información correspondiente a las planificaciones de clases de cada estudiante.</li>
	<li>En la sección <b>"Importar Lista"</b> puede ingresar el contenido de un archivo de excel con la información de estudiantes corrrespondiente. Haga click en <b>"Importar Lista"</b> en el panel <b>"Opciones"</b> para acceder.</li>
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
