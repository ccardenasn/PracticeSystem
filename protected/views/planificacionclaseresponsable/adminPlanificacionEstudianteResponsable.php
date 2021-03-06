<?php
/* @var $this PlanificacionclaseresponsableController */
/* @var $model Planificacionclaseresponsable */

$this->pageTitle= Yii::app()->name." - "."Administración";

$id=Yii::app()->request->getQuery('id');
$studentData=Estudiante::model()->find('RutEstudiante=?',array($id));

$this->breadcrumbs=array(
	'Planificaciones'=>array('index'),
	'Administración',
);

$loggedResponsable=Yii::app()->user->name;
        
$practicaRespModel=DocenteresponsablepracticaHasConfiguracionpractica::model()->findAll('DocenteResponsablePractica_RutResponsable=?',array($loggedResponsable));

$practicasDrop = array();
$practicasEstudiante = array();
//$i=0;
foreach($practicaRespModel as $practica){
    $practicasDrop[$practica->configuracionpracticas->CodPractica]=$practica->configuracionpracticas->NombrePractica;
    $practicasEstudiante[$practica->configuracionpracticas->CodPractica]=$practica->configuracionpracticas->CodPractica;
}

//$estudianteRespModel=Estudianteresponsable::model()->findAll('ConfiguracionPractica_CodPractica=?',array('2','3'));

$estudianteRespModel = Estudianteresponsable::model()->findAllByAttributes(array('ConfiguracionPractica_CodPractica'=>$practicasEstudiante));

$estudianteDrop = array();
$rutDrop = array();

foreach($estudianteRespModel as $estudiante){
    $estudianteDrop[$estudiante->RutEstudiante]=$estudiante->NombreEstudiante;
    $rutDrop[$estudiante->RutEstudiante]=$estudiante->RutEstudiante;
}

$centrosData = Centropractica::model()->findAll();
$arrCentros = array();

foreach ($centrosData as $centro){
	$arrCentros[$centro->RBD] = $centro->RBD.' '.$centro->NombreCentroPractica;
}

$profesorData = Profesorguiacp::model()->findAll();
$arrProfesor = array();

foreach ($profesorData as $profesor){
	$arrProfesor[$profesor->RutProfGuiaCP] = $profesor->RutProfGuiaCP.' '.$profesor->NombreProfGuiaCP;
}

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
    array('label'=>'Lista de Estudiantes', 'url'=>array('estudianteresponsable/index')),
	array('label'=>'Administrar Estudiantes', 'url'=>array('estudianteresponsable/admin')),
    array('label'=>'Exportar a PDF', 'url'=>array('exportplanningpdf')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#planificacionclaseresponsable-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Estudiante: <?php echo $studentData->NombreEstudiante ?></h1><br>

<div class="collapse">
	<h3>Ayuda</h3>
	<ul align=justify>
		<ul>
			<h4>Opciones de Lista</h4>
			<li>Haga click sobre el símbolo <img src="images/AdminTemplates/view.png"> para visualizar información de un estudiante seleccionado en la lista.</li>
			<li>Haga click sobre el símbolo <img src="images/AdminTemplates/update.png"> para modificar información de un estudiante seleccionado en la lista.</li>
            <li>Haga click sobre el símbolo <img src="images/AdminTemplates/pdficon.png"> para generar un documento en formato .pdf del elemento seleccionado.</li>
            <li>Haga click en la opción <strong>"Exportar PDF"</strong> del panel de opciones ubicado a la derecha de la pantalla para generar un documento en formato <strong>.pdf</strong> con los datos obtenidos en la lista situada en la parte inferior.</li>
		</ul>
		
		<ul>
			<h4>Opciones de Búsqueda</h4>
			<li>Para efectuar búsquedas de datos escriba en los campos de texto situados debajo de los títulos de cada columna correspondiente para filtrar información.</li>
			<li>Haga click en <b>"Búsqueda Avanzada"</b> para mostrar u ocultar opciones para encontrar un estudiante específico.</li>
			<li>Escriba sobre los campos de texto de acuerdo a los criterios de búsqueda del usuario.</li>
			<li>Presione el botón <b>"Buscar"</b> para iniciar la búsqueda.</li>
			<li>Los resultados se mostrarán en la tabla inferior.</li>
		</ul>
	</ul>
</div>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>

<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'planificacionclaseresponsable-grid',
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
	'dataProvider'=>$model->searchByRut($id),
	'filter'=>$model,
	'columns'=>array(
        'SesionInformada',
        array('name'=>'CentroPractica_RBD','value'=>'$data->centroPracticaRBD->NombreCentroPractica','filter'=>$arrCentros),
        array('name'=>'ProfesorGuiaCP_RutProfGuiaCP','value'=>'$data->profesorGuiaCPRutProfGuiaCP->RutProfGuiaCP','filter'=>$arrProfesor),
		'Curso',
        array('name'=>'ConfiguracionPractica_CodPractica','value'=>'$data->configuracionPracticaCodPractica->NombrePractica','filter'=>$practicasDrop),
		array('name'=>'Ejecutado','value'=>'$data->Ejecutado','filter'=>array('Si'=>'Si','No'=>'No')),
		array('name'=>'Supervisado','value'=>'$data->Supervisado','filter'=>array('Si'=>'Si','No'=>'No')),
		array(
			'header'=>'Bitácora',
            'name'=>'CodPlanificacion',
			'type'=>'raw',
            'value'=>array($this,'gridBitacora'),
			'filter'=>false,
        ),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
