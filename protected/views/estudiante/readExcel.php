<?php

/* @var $this ListaestudianteController */
/* @var $model Listaestudiante */

$this->breadcrumbs=array('Importar Lista',);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Añadir', 'url'=>array('create')),
);

?>

<h1>Importar Lista de Estudiantes</h1><br>

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
			<h4>Lectura de Archivo</h4>
			<li>La listas de estudiantes deben elaborarse en formato de documento de <b>Microsoft Excel (.xlsx)</b>.</li>
			<li>Para leer un archivo de excel debe hacer click en el botón <b>"Seleccionar Archivo"</b>.</li>
			<li>A continuación se desplegará la ventana del explorador de archivos, seleccione el archivo que necesita subir, luego haga click en <b>"Abrir"</b>.</li>
			<li>Presione el botón <b>"Leer y Guardar Datos"</b> para almacenar el contenido del archivo excel.</li>
			<li>Los resultados se mostrarán en la tabla inferior.</li>
		</ul>
	</ul>
</div><br>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>

<?php $this->renderPartial('readExcelForm', array('model'=>$model)); ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'estudiante-grid',
	'summaryText'=>'Viendo {start}-{end} de {count} resultados',
	'emptyText'=>'No hay resultados',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'pager'=>array(
		'class'=>'CLinkPager',
		'header'=>'Ir a página:',
		'nextPageLabel'=>'Siguiente >',
		'prevPageLabel'=>'< Anterior',
        ),
	'columns'=>array(
		'RutEstudiante',
		'NombreEstudiante',
		'FechaIncorporacion',
		array('name'=>'Mencion_NombreMencion','value'=>'$data->mencionNombreMencion->NombreMencion','filter'=>CHtml::listData(Mencion::model()->findAll(),'NombreMencion','NombreMencion')),
		array('name'=>'ProfesorGuiaCP_RutProfGuiaCP','value'=>'$data->profesorGuiaCPRutProfGuiaCP->NombreProfGuiaCP','filter'=>CHtml::listData(Profesorguiacp::model()->findAll(),'RutProfGuiaCP','NombreProfGuiaCP')),
		array('name'=>'ConfiguracionPractica_NombrePractica','value'=>'$data->configuracionPracticaNombrePractica->NombrePractica','filter'=>CHtml::listData(Configuracionpractica::model()->findAll(),'NombrePractica','NombrePractica')),
		array('name'=>'CentroPractica_RBD','value'=>'$data->centroPracticaRBD->NombreCentroPractica','filter'=>CHtml::listData(Centropractica::model()->findAll(),'RBD','NombreCentroPractica')),
		array(
			'class'=>'CButtonColumn',
            'deleteConfirmation'=>'¡Advertencia! Se eliminarán todas las bitácoras, planificaciones y documentos asociados al estudiante ¿Desea Continuar?',
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