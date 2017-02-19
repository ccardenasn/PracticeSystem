<?php
/* @var $this UniversidadController */
/* @var $model Universidad */

$this->breadcrumbs=array(
	'Universidad'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Añadir', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#universidad-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Universidad</h1><br>

<ul>
	<h4>Opciones de Lista</h4>
	<li>Haga click sobre el símbolo <img src="images/AdminTemplates/view.png"> para visualizar información de universidad seleccionada en la lista.</li>
	<li>Haga click sobre el símbolo <img src="images/AdminTemplates/update.png"> para modificar información de universidad seleccionada en la lista.</li>
	<li>Haga click sobre el símbolo <img src="images/AdminTemplates/delete.png"> para eliminar toda la información de universidad seleccionad en la lista.</li>
</ul>

<ul>
	<h4>Opciones de Búsqueda</h4>
	<li>Para efectuar búsquedas de datos escriba en los campos de texto situados debajo de los títulos de cada columna correspondiente para filtrar información.</li>
	<li>Haga click en "Búsqueda Avanzada" para mostrar u ocultar opciones para encontrar una institución específica.</li>
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
	'id'=>'universidad-grid',
	'summaryText'=>'Viendo {start}-{end} de {count} resultados',
	'emptyText'=>'No hay resultados',
	'pager'=>array(
		'class'=>'CLinkPager',
		'header'=>'Ir a página:',
		'nextPageLabel'=>'Siguiente >',
		'prevPageLabel'=>'< Anterior',
        ),
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'NombreInstitucion',
		'Sede',
		'Campus',
		'Facultad',
		array('name'=>'Ciudad_codCiudad','value'=>'$data->ciudadCodCiudad->NombreCiudad'),
		array('name'=>'Provincia_codProvincia','value'=>'$data->provinciaCodProvincia->NombreProvincia'),
		array('name'=>'Region_codRegion','value'=>'$data->regionCodRegion->NombreRegion'),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
