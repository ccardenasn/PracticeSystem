<?php
/* @var $this DocentecoordinadorpracticasController */
/* @var $model Docentecoordinadorpracticas */

$this->breadcrumbs=array(
	'Docente Coordinador de Practicas'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Lista de Docentes Coordinadores de Practicas', 'url'=>array('index')),
	array('label'=>'Añadir Docente Coordinador de Practicas', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#docentecoordinadorpracticas-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Docente Coordinador de Practicas</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'docentecoordinadorpracticas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'RutCoordinador',
		'NombreCoordinador',
		'ClaveCoordinador',
		'MailCoordinador',
		'TelefonoCoordinador',
		'CelularCoordinador',
		/*
		'ImagenCoordinador',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
