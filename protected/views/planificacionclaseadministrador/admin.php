<?php
/* @var $this PlanificacionclaseadministradorController */
/* @var $model Planificacionclaseadministrador */

$this->breadcrumbs=array(
	'Planificaciones'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Lista de Estudiantes', 'url'=>array('estudiante/index')),
	array('label'=>'Administrar Estudiantes', 'url'=>array('estudiante/admin')),
	array('label'=>'Exportar a PDF', 'url'=>array('exportpdf')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#planificacionclaseadministrador-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Planificaciones</h1>

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
	'id'=>'planificacionclaseadministrador-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'Estudiante_RutEstudiante',
		'ConfiguracionPractica_NombrePractica',
		array('name'=>'CentroPractica_RBD','value'=>'$data->centroPracticaRBD->NombreCentroPractica'),
		'ProfesorGuiaCP_RutProfGuiaCP',
		array('name'=>'ProfesorGuiaCP_RutProfGuiaCP','value'=>'$data->profesorGuiaCPRutProfGuiaCP->NombreProfGuiaCP'),
		'Curso',
		'Ejecutado',
		'Supervisado',
		array(
			'class'=>'CButtonColumn',
				'template'=>'{view}{update}{delete}{pdf}',
			'buttons'=>array(
			'pdf'=>array(
			'label'=>'Generar Pdf',
			'url'=>"CHtml::normalizeUrl(array('pdf', 'id'=>\$data->CodPlanificacion
			))",
			'options'=>array('class'=>'pdf'),
			),
			),
		),
	),
)); ?>
