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
		'Mencion_NombreMencion',
		'ProfesorGuiaCP_RutProfGuiaCP',
		'ConfiguracionPractica_NombrePractica',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>