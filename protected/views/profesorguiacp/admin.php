<?php
/* @var $this ProfesorguiacpController */
/* @var $model Profesorguiacp */

$this->pageTitle= Yii::app()->name." - "."Administración";

$this->breadcrumbs=array(
	'Profesor Guia CP'=>array('index'),
	'Administración',
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Añadir', 'url'=>array('create')),
    array('label'=>'Exportar a PDF', 'url'=>array('exportpdf')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#profesorguiacp-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administración de Profesor Guia CP</h1><br>
	
<div class="collapse">
	<h3>Ayuda</h3>
	<ul align=justify>
		<ul>
			<h4>Opciones de Lista</h4>
			<li>Haga click sobre el símbolo <img src="images/AdminTemplates/view.png"> para visualizar información de un profesor seleccionado en la lista.</li>
			<li>Haga click sobre el símbolo <img src="images/AdminTemplates/update.png"> para modificar información de un profesor seleccionado en la lista.</li>
			<li>Haga click sobre el símbolo <img src="images/AdminTemplates/delete.png"> para eliminar toda la información de un profesor seleccionado en la lista.</li>
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
	'id'=>'profesorguiacp-grid',
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
		'RutProfGuiaCP',
		'NombreProfGuiaCP',
		'CursoProfGuiaCP',
        array('name'=>'ProfesorJefeProfGuiaCP','value'=>'$data->ProfesorJefeProfGuiaCP','filter'=>array('Si'=>'Si','No'=>'No','No Aplica'=>'No Aplica')),
		'MailProfGuiaCP',
		'TelefonoProfGuiaCP',
		'CelularProfGuiaCP',
		array('name'=>'CentroPractica_RBD','value'=>'$data->centroPracticaRBD->NombreCentroPractica','filter'=>CHtml::listData(Centropractica::model()->findAll(),'RBD','NombreCentroPractica','RBD')),
		array(
			'class'=>'CButtonColumn',
            'htmlOptions' => array('style'=>'width:65px'),
            'deleteConfirmation'=>'¿Esta seguro de querer borrar este elemento? Recuerde que si el profesor guía cp está asociado a algún estudiante y/o planificación este no se borrará',
            'template'=>'{view}{update}{delete}{pdf}',
            'buttons'=>array(
                'pdf'=>array(
                    'label'=>'Generar Pdf',
                    'imageUrl'=>Yii::app()->request->baseUrl.'/images/AdminTemplates/pdficon.png',
                    'url'=>"CHtml::normalizeUrl(array('pdf', 'id'=>\$data->RutProfGuiaCP))",
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
