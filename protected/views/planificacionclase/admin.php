<?php
/* @var $this PlanificacionclaseController */
/* @var $model Planificacionclase */

$this->pageTitle= Yii::app()->name." - "."Administración";

$loggedStudent=Yii::app()->user->name;
$studentData=Estudiante::model()->find('RutEstudiante=?',array($loggedStudent));

$this->breadcrumbs=array(
	'Planificaciones'=>array('index'),
	'Administración',
);

$this->menu=array(
	array('label'=>'Planificación de Clases', 'url'=>array('index')),
	array('label'=>'Añadir', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#planificacionclase-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administración de Planificaciones</h1><br>

<h2>Estudiante: <?php echo $studentData->NombreEstudiante ?></h2><br>

<?php if(Yii::app()->user->hasFlash('message')):?>
<div class="row buttons">
	<?php echo Yii::app()->user->getFlash('message'); ?>
</div>
<?php endif; ?>

<div class="collapse">
	<h3>Ayuda</h3>
	<ul align=justify>
		<ul>
			<h4>Opciones de Lista</h4>
			<li>Haga click sobre el símbolo <img src="images/AdminTemplates/view.png"> para visualizar información de un estudiante seleccionado en la lista.</li>
			<li>Haga click sobre el símbolo <img src="images/AdminTemplates/update.png"> para modificar información de un estudiante seleccionado en la lista.</li>
			<li>Haga click sobre el símbolo <img src="images/AdminTemplates/delete.png"> para eliminar toda la información de un estudiante seleccionado en la lista.</li>
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
</div><br>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>

<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'planificacionclase-grid',
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
	'dataProvider'=>$model->searchByRut($loggedStudent),
	'filter'=>$model,
	'columns'=>array(
		//'CodPlanificacion',
		//'Estudiante_RutEstudiante',
		'SesionInformada',
		//'CentroPractica_RBD',
		array('name'=>'CentroPractica_RBD','value'=>'$data->centroPracticaRBD->NombreCentroPractica','filter'=>CHtml::listData(Centropractica::model()->findAll(),'RBD','NombreCentroPractica','RBD')),
		//'ProfesorGuiaCP_RutProfGuiaCP',
		array('name'=>'ProfesorGuiaCP_RutProfGuiaCP','value'=>'$data->profesorGuiaCPRutProfGuiaCP->RutProfGuiaCP','filter'=>CHtml::listData(Profesorguiacp::model()->findAll(),'RutProfGuiaCP','NombreProfGuiaCP','RutProfGuiaCP')),
		'Curso',
		//'ConfiguracionPractica_NombrePractica',
		array('name'=>'ConfiguracionPractica_CodPractica','value'=>'$data->configuracionPracticaCodPractica->NombrePractica','filter'=>CHtml::listData(Configuracionpractica::model()->findAll(),'CodPractica','NombrePractica')),
		//'Fecha',
		array('name'=>'Ejecutado','value'=>'$data->Ejecutado','filter'=>array('Si'=>'Si','No'=>'No')),
		array('name'=>'Supervisado','value'=>'$data->Supervisado','filter'=>array('Si'=>'Si','No'=>'No')),
		//'ComentarioPlanificacion',
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
            'deleteConfirmation'=>'¿Está seguro de querer eliminar este elemento? Si realiza esta acción se eliminarán todos los datos de bitácora asociados a esta planificación.',
            'buttons'=>array(
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
