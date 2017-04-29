<?php
/* @var $this CentropracticaController */
/* @var $model Centropractica */

$this->breadcrumbs=array(
	'Centros de Práctica'=>array('index'),
	'Administración',
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
	$('#centropractica-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administración de Centros de Práctica</h1><br>

<div class="collapse">
	<h3>Ayuda</h3>
	<ul>
		<ul>
			<h4>Opciones de Lista</h4>
			<li>Haga click sobre el símbolo <img src="images/AdminTemplates/view.png"> para visualizar información de un centro seleccionado en la lista.</li>
			<li>Haga click sobre el símbolo <img src="images/AdminTemplates/update.png"> para modificar información de un centro seleccionado en la lista.</li>
			<li>Haga click sobre el símbolo <img src="images/AdminTemplates/delete.png"> para eliminar toda la información de un centro seleccionado en la lista.</li>
		</ul>
		
		<ul>
			<h4>Opciones de Búsqueda</h4>
			<li>Para efectuar búsquedas de datos escriba en los campos de texto situados debajo de los títulos de cada columna correspondiente para filtrar información.</li>
			<li>Haga click en <strong>"Búsqueda Avanzada"</strong> para mostrar u ocultar opciones para encontrar un estudiante específico.</li>
			<li>Escriba sobre los campos de texto de acuerdo a los criterios de búsqueda del usuario.</li>
			<li>Presione el botón <strong>"Buscar"</strong> para iniciar la búsqueda.</li>
			<li>Los resultados se mostrarán en la tabla inferior.</li>
		</ul>
	</ul>
</div><br>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>

<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'centropractica-grid',
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
		'RBD',
		'NombreCentroPractica',
		'VigenciaProtocolo',
		'FechaProtocolo',
		'AnexoProtocolo',
		array('name'=>'Dependencia_CodDependencia','value'=>'$data->dependenciaCodDependencia->NombreDependencia'),
		array('name'=>'NivelEducacional_CodNivel','value'=>'$data->nivelEducacionalCodNivel->NombreNivel'),
		'Area',
		//'Region_codRegion',
		//'Provincia_codProvincia',
		//'Ciudad_codCiudad',
		'Calle',
		//'ImagenCentroPractica',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
