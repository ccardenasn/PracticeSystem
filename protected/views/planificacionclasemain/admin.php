<?php
/* @var $this PlanificacionclasemainController */
/* @var $model Planificacionclasemain */

$this->breadcrumbs=array(
	'Planificacionclasemains'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Planificacionclasemain', 'url'=>array('index')),
	array('label'=>'Create Planificacionclasemain', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#planificacionclasemain-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Planificacionclasemains</h1>

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
	'id'=>'planificacionclasemain-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'CodPlanificacion',
		'Estudiante_RutEstudiante',
		'CentroPractica_RBD',
		'ProfesorGuiaCP_RutProfGuiaCP',
		'Curso',
		'ConfiguracionPractica_CodPractica',
		/*
		'Fecha',
		'SesionInformada',
		'Ejecutado',
		'Supervisado',
		'ComentarioPlanificacion',
		'DocumentoPlanificacion',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
