<?php
/* @var $this UniversidadmainController */
/* @var $model Universidad */

$this->breadcrumbs=array(
	'Universidads'=>array('index'),
	$model->NombreInstitucion,
);

$this->menu=array(
	array('label'=>'List Universidad', 'url'=>array('index')),
	array('label'=>'Create Universidad', 'url'=>array('create')),
	array('label'=>'Update Universidad', 'url'=>array('update', 'id'=>$model->NombreInstitucion)),
	array('label'=>'Delete Universidad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->NombreInstitucion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Universidad', 'url'=>array('admin')),
);
?>

<h1>View Universidad #<?php echo $model->NombreInstitucion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'NombreInstitucion',
		'Sede',
		'Campus',
		'Facultad',
		'Region_codRegion',
		'Provincia_codProvincia',
		'Ciudad_codCiudad',
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
