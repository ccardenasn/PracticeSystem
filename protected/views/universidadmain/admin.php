<?php
/* @var $this UniversidadmainController */
/* @var $model Universidad */

$this->breadcrumbs=array(
	'Universidads'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Universidad', 'url'=>array('index')),
	array('label'=>'Create Universidad', 'url'=>array('create')),
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

<h1>Manage Universidads</h1>

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
	'id'=>'universidad-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'NombreInstitucion',
		'Sede',
		'Campus',
		'Facultad',
		'Region_codRegion',
		'Provincia_codProvincia',
		/*
		'Ciudad_codCiudad',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
