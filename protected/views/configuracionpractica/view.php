<?php
/* @var $this ConfiguracionpracticaController */
/* @var $model Configuracionpractica */

$this->pageTitle= Yii::app()->name." - "."Detalles";

$this->breadcrumbs=array(
	'Configuración de Prácticas'=>array('index'),
	$model->NombrePractica,
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Editar', 'url'=>array('update', 'id'=>$model->CodPractica)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CodPractica),'confirm'=>'¿Está seguro de querer eliminar este elemento?')),
	array('label'=>'Administración', 'url'=>array('admin')),
    array('label'=>'Crear PDF', 'url'=>array('pdf','id'=>$model->CodPractica)),
);
?>

<h1>Tipo: <?php echo $model->NombrePractica; ?></h1><br>
	
<?php if(Yii::app()->user->hasFlash('message')):?>
<div class="row buttons">
    <?php echo Yii::app()->user->getFlash('message'); ?>
</div>
<?php endif; ?>

<div class="collapse">
	<h3>Ayuda</h3>
	<ul align=justify>
		<ul>
			<h4>Instrucciones de Opciones</h4>
			<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
			<li>Haga click en <strong>"Añadir"</strong> para agregar un nueva práctica a la lista.</li>
			<li>Haga click en <strong>"Editar"</strong> para modificar información de práctica.</li>
			<li>Haga click en <strong>"Eliminar"</strong> para borrar toda la información de práctica.</li>
			<li>Desde la sección <strong>"Administración"</strong> se puede observar una lista de prácticas existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en <strong>"Administración"</strong> en el panel <strong>"Opciones"</strong> para acceder.</li>
			<li>Para regresar al índice de prácticas haga click en <strong>"Lista"</strong>.</li>
            <li>Haga click en <strong>"Crear PDF"</strong> para generar un documento en formato <strong>.pdf</strong> con información de práctica.</li>
		</ul>
	</ul>
</div><br>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
    'cssFile' => Yii::app()->baseUrl .'/css/detailview/styles.css',
	'attributes'=>array(
		'NombrePractica',
		'DescripcionPractica',
		'FechaPractica',
		'semestreCodSemestre.NombreSemestre',
		'NumeroSesionesPractica',
		'NumeroHorasPractica',
		'DocenteCoordinadorPracticas_RutCoordinador',
		'docenteCoordinadorPracticasRutCoordinador.NombreCoordinador',
		//'DocenteResponsablePractica_RutResponsable',
		//'docenteResponsablePracticaRutResponsable.NombreResponsable',
	),
)); ?>

<br/>
<h2>Docentes Repsonsables de Prácticas</h2>

<table>
	<thead>
		<tr>
			<th>Rut</th>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Teléfono</th>
			<th>Celular</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($model->docenteresponsablepracticas as $responsable) : ?>
		<tr>
			<td><?php echo $responsable->RutResponsable ?></td>
            <td><?php echo $responsable->NombreResponsable ?></td>
            <td><?php echo $responsable->MailResponsable ?></td>
            <td><?php echo $responsable->TelefonoResponsable ?></td>
            <td><?php echo $responsable->CelularResponsable ?></td>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>
