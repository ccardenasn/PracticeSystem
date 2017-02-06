<?php
/* @var $this DirectorcpController */
/* @var $model Directorcp */

$this->breadcrumbs=array(
	'Director CP'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Lista de Directores CP', 'url'=>array('index')),
	array('label'=>'Añadir Director CP', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#directorcp-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Director CP</h1><br>

<ul>
	<h4>Opciones de Lista</h4>
	<li>Haga click sobre el símbolo <img src="images/AdminTemplates/view.png"> para visualizar información de un director seleccionado en la lista.</li>
	<li>Haga click sobre el símbolo <img src="images/AdminTemplates/update.png"> para modificar información de un director seleccionado en la lista.</li>
	<li>Haga click sobre el símbolo <img src="images/AdminTemplates/delete.png"> para eliminar toda la información de un director seleccionado en la lista.</li>
</ul>

<ul>
	<h4>Opciones de Búsqueda</h4>
	<li>Para efectuar búsquedas de datos escriba en los campos de texto situados debajo de los títulos de cada columna correspondiente para filtrar información.</li>
	<li>Haga click en "Búsqueda Avanzada" para mostrar u ocultar opciones para encontrar un estudiante específico.</li>
	<li>Escriba sobre los campos de texto de acuerdo a los criterios de búsqueda del usuario.</li>
	<li>Presione el botón "Buscar" para iniciar la búsqueda.</li>
	<li>Los resultados se mostrarán en la tabla inferior.</li>
</ul>

<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'directorcp-grid',
	'summaryText'=>'Viendo {start}-{end} de {count} resultados',
	'emptyText'=>'No hay resultados',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'RutDirectorCP',
		'NombreDirectorCP',
		'MailDirectorCP',
		'TelefonoDirectorCP',
		'CelularDirectorCP',
		'CentroPractica_RBD',
		/*
		'ImagenDirectorCP',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
