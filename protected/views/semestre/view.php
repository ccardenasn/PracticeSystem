<?php
/* @var $this SemestreController */
/* @var $model Semestre */

$this->pageTitle= Yii::app()->name." - "."Detalles";

$this->breadcrumbs=array(
	'Semestres'=>array('index'),
	$model->NombreSemestre,
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Editar', 'url'=>array('update', 'id'=>$model->CodSemestre)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CodSemestre),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administración', 'url'=>array('admin')),
    array('label'=>'Crear PDF', 'url'=>array('pdf','id'=>$model->CodSemestre)),
);
?>

<h1>Periodo: <?php echo $model->NombreSemestre; ?></h1><br>

<div class="collapse">
	<h3>Ayuda</h3>
	<ul align=justify>
		<ul>
			<h4>Instrucciones de Opciones</h4>
			<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
			<li>Haga click en <strong>"Añadir"</strong> para agregar un nuevo semestre a la lista.</li>
			<li>Haga click en <strong>"Editar"</strong> para modificar información de semestre.</li>
			<li>Haga click en <strong>"Eliminar"</strong> para borrar toda la información de semestre.</li>
			<li>Desde la sección <strong>"Administración"</strong> se puede observar una lista de semestre existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en <strong>"Administración"</strong> en el panel <strong>"Opciones"</strong> para acceder.</li>
			<li>Para regresar al índice de semestres haga click en <strong>"Lista"</strong>.</li>
		</ul>
	</ul>
</div><br>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'CodSemestre',
		'NombreSemestre',
	),
)); ?>

<br/>
<h2>Asignaturas </h2>

<table>
	<thead>
		<tr>
			<th>Nombre de Asignaturas</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($model->asignaturas as $asignatura) : ?>
		<tr>
			<td><?php echo $asignatura->NombreAsignatura ?></td>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>