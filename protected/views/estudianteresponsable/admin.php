<?php
/* @var $this EstudianteresponsableController */
/* @var $model Estudianteresponsable */

$this->breadcrumbs=array(
	'Estudiantes'=>array('index'),
	'Administración',
);

$loggedResponsable=Yii::app()->user->name;
        
$practicaRespModel=DocenteresponsablepracticaHasConfiguracionpractica::model()->findAll('DocenteResponsablePractica_RutResponsable=?',array($loggedResponsable));

//print_r($practicaRespModel);

$practicasDrop = array();

foreach($practicaRespModel as $practica){
    $practicasDrop[$practica->configuracionpracticas->CodPractica]=$practica->configuracionpracticas->NombrePractica;
}

//print_r($practicasDrop);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
    array('label'=>'Exportar a PDF', 'url'=>array('exportpdf')),
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

<h1>Administración de Estudiantes</h1><br>

<div class="collapse">
	<h3>Ayuda</h3>
	<ul align=justify>
		<ul>
			<h4>Opciones de Lista</h4>
			<li>Haga click sobre el símbolo <img src="images/AdminTemplates/view.png"> para visualizar información de un estudiante seleccionado en la lista.</li>
            <li>Haga click sobre el símbolo <img src="images/AdminTemplates/pdficon.png"> para generar un documento en formato .pdf del elemento seleccionado.</li>
            <li>Haga click en la opción <strong>"Exportar PDF"</strong> del panel de opciones ubicado a la derecha de la pantalla para generar un documento en formato <strong>.pdf</strong> con los datos obtenidos en la lista situada en la parte inferior.</li>
		</ul>
		
		<ul>
			<h4>Opciones de Búsqueda</h4>
			<li>Para efectuar búsquedas de datos escriba en los campos de texto situados debajo de los títulos de cada columna correspondiente para filtrar información, luego presione <strong>"Enter"</strong>.</li>
			<li>Los resultados se mostrarán en la tabla inferior.</li>
		</ul>
	</ul>
</div>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>

<?php //echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'estudianteresponsable-grid',
    'cssFile' => Yii::app()->baseUrl .'/css/gridview/styles.css',
    'summaryText'=>'Viendo {start}-{end} de {count} resultados',
	'emptyText'=>'No hay resultados',
	'pager'=>array(
		'class'=>'CLinkPager',
        'cssFile' => Yii::app()->baseUrl .'/css/pager.css',
		'header'=>'Ir a página:',
		'nextPageLabel'=>'Siguiente >',
		'prevPageLabel'=>'< Anterior',
        ),
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
            'template'=>'{view}{pdf}',
            'buttons'=>array(
                'pdf'=>array(
                    'label'=>'Generar Pdf',
                    'imageUrl'=>Yii::app()->request->baseUrl.'/images/AdminTemplates/pdficon.png',
                    'url'=>"CHtml::normalizeUrl(array('pdf', 'id'=>\$data->RutEstudiante))",
                    'options'=>array('class'=>'pdf'),
                ),
                'view' => array(
                    'label'=>'Detalles',
                ),
			),
		),
	),
)); ?>
