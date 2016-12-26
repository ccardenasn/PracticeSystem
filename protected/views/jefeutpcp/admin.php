<?php
/* @var $this JefeutpcpController */
/* @var $model Jefeutpcp */

$this->breadcrumbs=array(
	'Jefe UTP CP'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Lista de Jefes UTP CP', 'url'=>array('index')),
	array('label'=>'Añadir Jefe UTP CP', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#jefeutpcp-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Jefe UTP CP</h1>

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
	'id'=>'jefeutpcp-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'RutJefeUTPCP',
		'NombreJefeUTPCP',
		'MailJefeUTPCP',
		'TelefonoJefeUTPCP',
		'CelularJefeUTPCP',
		'CentroPractica_RBD',
		/*
		'ImagenJefeUTPCP',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
