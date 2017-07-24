<?php
/* @var $this EstudianteresponsableController */
/* @var $model Estudianteresponsable */

$this->breadcrumbs=array(
	'Estudianteresponsables'=>array('index'),
	'Manage',
);

$loggedResponsable=Yii::app()->user->name;
        
$practicaRespModel=DocenteresponsablepracticaHasConfiguracionpractica::model()->findAll('DocenteResponsablePractica_RutResponsable=?',array($loggedResponsable));

$practicasDrop = array();

foreach($practicaRespModel as $practica){
    $practicasDrop[$practica->configuracionpracticas->CodPractica]=$practica->configuracionpracticas->NombrePractica;
}

//print_r($practicasDrop);

$this->menu=array(
	array('label'=>'List Estudianteresponsable', 'url'=>array('index')),
	array('label'=>'Create Estudianteresponsable', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#estudianteresponsable-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Estudianteresponsables</h1>

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
	'id'=>'estudianteresponsable-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'RutEstudiante',
		'NombreEstudiante',
		'FechaIncorporacion',
        array('name'=>'Mencion_CodMencion','value'=>'$data->mencionCodMencion->NombreMencion','filter'=>CHtml::listData(Mencion::model()->findAll(),'CodMencion','NombreMencion')),
		array('name'=>'ProfesorGuiaCP_RutProfGuiaCP','value'=>'$data->profesorGuiaCPRutProfGuiaCP->NombreProfGuiaCP','filter'=>CHtml::listData(Profesorguiacp::model()->findAll(),'RutProfGuiaCP','NombreProfGuiaCP')),
		array('name'=>'ConfiguracionPractica_CodPractica','value'=>'$data->configuracionPracticaCodPractica->NombrePractica','filter'=>$practicasDrop),
		array('name'=>'CentroPractica_RBD','value'=>'$data->centroPracticaRBD->NombreCentroPractica','filter'=>CHtml::listData(Centropractica::model()->findAll(),'RBD','NombreCentroPractica')),
		array('name'=>'SituacionFinalEstudiante','value'=>'$data->SituacionFinalEstudiante','filter'=>array('Pendiente'=>'Pendiente','Aprobado'=>'Aprobado','Reprobado'=>'Reprobado')),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
