<?php
/* @var $this PlanificacionclaseadministradorController */
/* @var $model Planificacionclaseadministrador */

$this->pageTitle= Yii::app()->name." - "."Administración";

$this->breadcrumbs=array(
	'Planificaciones'=>array('index'),
	'Administración',
);

$estudiantesData = Estudiante::model()->findAll();
$arrEstudiantes = array();

foreach ($estudiantesData as $est){
	$arrEstudiantes[$est->RutEstudiante] = $est->RutEstudiante.' '.$est->NombreEstudiante;
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
	array('label'=>'Planificaciones', 'url'=>array('index')),
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

<h1>Administración de Planificaciones</h1><br>

<div class="collapse">
	<h3>Ayuda</h3>
	<ul align=justify>
		<ul>
			<h4>Opciones de Lista</h4>
			<li>Haga click sobre el símbolo <img src="images/AdminTemplates/view.png"> para visualizar información de un estudiante seleccionado en la lista.</li>
			<li>Haga click sobre el símbolo <img src="images/AdminTemplates/update.png"> para modificar información de un estudiante seleccionado en la lista.</li>
			<li>Haga click sobre el símbolo <img src="images/AdminTemplates/delete.png"> para eliminar toda la información de un estudiante seleccionado en la lista.</li>
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
	'id'=>'planificacionclaseadministrador-grid',
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
		array('name'=>'Estudiante_RutEstudiante','value'=>'$data->estudianteRutEstudiante->NombreEstudiante','filter'=>$arrEstudiantes),
		array('name'=>'ConfiguracionPractica_CodPractica','value'=>'$data->configuracionPracticaCodPractica->NombrePractica','filter'=>CHtml::listData(Configuracionpractica::model()->findAll(),'CodPractica','NombrePractica')),
		array('name'=>'CentroPractica_RBD','value'=>'$data->centroPracticaRBD->NombreCentroPractica','filter'=>$arrCentros),
		array('name'=>'ProfesorGuiaCP_RutProfGuiaCP','value'=>'$data->profesorGuiaCPRutProfGuiaCP->RutProfGuiaCP','filter'=>$arrProfesor),
		'Curso',
		array('name'=>'Ejecutado','value'=>'$data->Ejecutado','filter'=>array('Si'=>'Si','No'=>'No')),
		array('name'=>'Supervisado','value'=>'$data->Supervisado','filter'=>array('Si'=>'Si','No'=>'No')),
		array(
			'header'=>'Bitácora',
            'name'=>'CodPlanificacion',
			'type'=>'raw',
            'value'=>array($this,'gridBitacora'),
			//'value'=>'CHtml::tag("div",  array("style"=>"float: left; margin:5px; cursor:pointer" ,"onclick"=>"gridBitacora({$data["CodPlanificacion"]})","id" => "{$data["CodPlanificacion"]}","href"=>"javascript:void(0);") ,
 //CHtml::tag("img", array( "src" => "'.Yii::app()->request->baseUrl . '/images/AdminTemplates/{gridBitacora({$data["CodPlanificacion"]})}"")))',
			//'value'=>'CHtml::image("images/AdminTemplates/okicon.png")',
			'filter'=>false,
        ),
		
		
		array(
			'class'=>'CButtonColumn',
            'htmlOptions' => array('style'=>'width:65px'),
            'deleteConfirmation'=>'¿Está seguro de querer eliminar este elemento? Si realiza esta acción se eliminarán todos los datos de bitácora asociados a esta planificación.',
            'template'=>'{view}{update}{delete}{pdf}',
            'buttons'=>array(
                'pdf'=>array(
                    'label'=>'Generar Pdf',
                    'imageUrl'=>Yii::app()->request->baseUrl.'/images/AdminTemplates/pdficon.png',
                    'url'=>"CHtml::normalizeUrl(array('pdf', 'id'=>\$data->CodPlanificacion))",
                    'options'=>array('class'=>'pdf'),
                ),
                'view' => array(
                    'label'=>'Detalles',
                ),
                'update' => array(
                    'label'=>'Editar',
                ),
                'delete' => array(
                    'label'=>'Eliminar',
                ),
			),
		),
	),
)); ?>
