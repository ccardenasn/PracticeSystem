<?php
/* @var $this UniversidadmainController */
/* @var $model Universidad */

$query = "select RutDirector from directorcarrera;";
$rutDirector=Yii::app()->db->createCommand($query)->queryScalar();
$directorData=Directorcarrera::model()->find('RutDirector=?',array($rutDirector));


$this->pageTitle= Yii::app()->name." - "."Detalles";

$this->breadcrumbs=array(
	'Universidad'=>array('index'),
	$model->NombreInstitucion,
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Editar', 'url'=>array('update', 'id'=>$model->NombreInstitucion)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->NombreInstitucion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administración', 'url'=>array('admin')),
    array('label'=>'Crear PDF', 'url'=>array('pdf','id'=>$model->NombreInstitucion)),
);
?>

<h1>Universidad: <?php echo $model->NombreInstitucion; ?></h1><br>

<div class="collapse">
	<h3>Ayuda</h3>
	<ul align=justify>
		<ul>
			<h4>Instrucciones de Opciones</h4>
			<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
			<li>Haga click en <strong>"Añadir"</strong> para agregar universidad a la lista.</li>
			<li>Haga click en <strong>"Editar"</strong> para modificar información de universidad.</li>
			<li>Haga click en <strong>"Eliminar"</strong> para borrar toda la información de universidad.</li>
			<li>Desde la sección <strong>"Administración"</strong> se puede observar una lista con la universidad agregada, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en <strong>"Administración"</strong> en el panel <strong>"Opciones"</strong> para acceder.</li>
			<li>Para regresar al índice de universidad haga click en <strong>"Lista"</strong>.</li>
            <li>Haga click en <strong>"Crear PDF"</strong> para generar un documento en formato <strong>.pdf</strong> con información de universidad.</li>
		</ul>
	</ul>
</div><br>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'NombreInstitucion',
		'Sede',
		'Campus',
		'Facultad',
		'regionCodRegion.NombreRegion',
		'provinciaCodProvincia.NombreProvincia',
		'ciudadCodCiudad.NombreCiudad',
	),
)); ?>

<br/>
<h2>Carrera </h2>
<table>
	<thead>
		<tr>
			<th>Código</th>
			<th>Nombre</th>
			<th>Semestres</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($model->carreras as $carrera) : ?>
		<tr>
			<td><?php echo $carrera->codCarrera ?></td>
			<td><?php echo $carrera->NombreCarrera ?></td>
			<td><?php echo $carrera->SemestresCarrera ?></td>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>

<br/>
<h2>Director </h2>
<table>
	<thead>
		<tr>
			<th>Rut</th>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Teléfono</th>
			<th>Celular</th>
			<th>Imagen</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><?php echo $directorData->RutDirector ?></td>
			<td><?php echo $directorData->NombreDirector ?></td>
			<td><?php echo $directorData->MailDirector ?></td>
			<td><?php echo $directorData->TelefonoDirector ?></td>
			<td><?php echo $directorData->CelularDirector ?></td>
			<td><?php echo $directorData->ImagenDirector ?></td>
		</tr>
	</tbody>
</table>

<br/>
<h2>Secretaria </h2>
<table>
	<thead>
		<tr>
			<th>Rut</th>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Teléfono</th>
			<th>Celular</th>
			<th>Imagen</th>
		</tr>
	</thead>
	<tbody>
		<?php
	
	
	$car=Carrera::model()->find('Universidad_NombreInstitucion=?',array($model->NombreInstitucion));
	?>
		<?php foreach($car->secretariacarreras as $secretaria) : ?>
		<tr>
			<td><?php echo $secretaria->RutSecretaria ?></td>
			<td><?php echo $secretaria->NombreSecretaria ?></td>
			<td><?php echo $secretaria->MailSecretaria ?></td>
			<td><?php echo $secretaria->TelefonoSecretaria ?></td>
			<td><?php echo $secretaria->CelularSecretaria ?></td>
			<td><?php echo $secretaria->ImagenSecretaria ?></td>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>