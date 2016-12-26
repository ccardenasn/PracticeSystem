<?php
/* @var $this ProfesorcoordinadorpracticacpController */
/* @var $model Profesorcoordinadorpracticacp */

$this->breadcrumbs=array(
	'Profesor Coordinador de Practicas CP'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'List Profesor Coordinador de Practicas CP', 'url'=>array('index')),
	array('label'=>'Create Profesor Coordinador de Practicas CP', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#profesorcoordinadorpracticacp-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Profesores Coordinadores de Practicas CP</h1>

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
	'id'=>'profesorcoordinadorpracticacp-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'RutProfCoordGuiaCp',
		'NombreProfCoordGuiaCP',
		'MailProfCoordGuiaCP',
		'TelefonoProfCoordGuiaCP',
		'CelularProfCoordGuiaCP',
		'CentroPractica_RBD',
		/*
		'ImagenProfCoordGuiaCP',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
