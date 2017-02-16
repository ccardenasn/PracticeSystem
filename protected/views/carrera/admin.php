<?php
/* @var $this CarreraController */
/* @var $model Carrera */

$this->breadcrumbs=array(
	'Carrera'=>array('index'),
	'Administración de Carrera',
);

$this->menu=array(
	array('label'=>'Lista de Carreras', 'url'=>array('index')),
	array('label'=>'Añadir Carrera', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#carrera-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administración de Carrera</h1><br>

<ul>
	<h4>Opciones de Lista</h4>
	<li>Haga click sobre el símbolo <img src="images/AdminTemplates/view.png"> para visualizar información de carrera seleccionada en la lista.</li>
	<li>Haga click sobre el símbolo <img src="images/AdminTemplates/update.png"> para modificar información de carrera seleccionada en la lista.</li>
	<li>Haga click sobre el símbolo <img src="images/AdminTemplates/delete.png"> para eliminar toda la información carrera seleccionada en la lista.</li>
</ul>

<ul>
	<h4>Opciones de Búsqueda</h4>
	<li>Para efectuar búsquedas de datos escriba en los campos de texto situados debajo de los títulos de cada columna correspondiente para filtrar información.</li>
	<li>Haga click en "Búsqueda Avanzada" para mostrar u ocultar opciones para encontrar una carrera específica.</li>
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
	'id'=>'carrera-grid',
	'summaryText'=>'Viendo {start}-{end} de {count} resultados',
	'emptyText'=>'No hay resultados',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'codCarrera',
		'NombreCarrera',
		'Sede',
		array('name'=>'Ciudad_codCiudad','value'=>'$data->ciudadCodCiudad->NombreCiudad'),
		array('name'=>'Provincia_codProvincia','value'=>'$data->provinciaCodProvincia->NombreProvincia'),
		array('name'=>'Region_codRegion','value'=>'$data->regionCodRegion->NombreRegion'),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
