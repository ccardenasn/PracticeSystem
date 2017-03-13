<?php
/* @var $this CentropracticamainController */
/* @var $model Centropractica */

$this->breadcrumbs=array(
	'Centropracticas'=>array('index'),
	$model->RBD,
);

$this->menu=array(
	array('label'=>'List Centropractica', 'url'=>array('index')),
	array('label'=>'Create Centropractica', 'url'=>array('create')),
	array('label'=>'Update Centropractica', 'url'=>array('update', 'id'=>$model->RBD)),
	array('label'=>'Delete Centropractica', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RBD),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Centropractica', 'url'=>array('admin')),
);
?>

<h1>View Centropractica #<?php echo $model->RBD; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'RBD',
		'NombreCentroPractica',
		'VigenciaProtocolo',
		'FechaProtocolo',
		'AnexoProtocolo',
		'Dependencia',
		'NivelEducacional',
		'Area',
		'Region_codRegion',
		'Provincia_codProvincia',
		'Ciudad_codCiudad',
		'Calle',
		'ImagenCentroPractica',
	),
)); ?>

<br/>
<h2>Secretaria CP </h2>
<table>
	<thead>
		<tr>
			<th>Rut</th>
			<th>Nombre</th>
			<th>Mail</th>
			<th>Teléfono</th>
			<th>Celular</th>
			<th>Imagen</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($model->secretariacps as $secretaria) : ?>
		<tr>
			<td><?php echo $secretaria->RutSecretariaCP ?></td>
			<td><?php echo $secretaria->NombreSecretariaCP ?></td>
			<td><?php echo $secretaria->MailSecretariaCP ?></td>
			<td><?php echo $secretaria->TelefonoSecretariaCP ?></td>
			<td><?php echo $secretaria->CelularSecretariaCP ?></td>
			<td><?php echo $secretaria->ImagenSecretariaCP ?></td>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>

<br/>
<h2>Director CP </h2>
<table>
	<thead>
		<tr>
			<th>Rut</th>
			<th>Nombre</th>
			<th>Mail</th>
			<th>Teléfono</th>
			<th>Celular</th>
			<th>Imagen</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($model->directorcps as $director) : ?>
		<tr>
			<td><?php echo $director->RutDirectorCP ?></td>
			<td><?php echo $director->NombreDirectorCP ?></td>
			<td><?php echo $director->MailDirectorCP ?></td>
			<td><?php echo $director->TelefonoDirectorCP ?></td>
			<td><?php echo $director->CelularDirectorCP ?></td>
			<td><?php echo $director->ImagenDirectorCP ?></td>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>

<br/>
<h2>Jefe UTP CP </h2>
<table>
	<thead>
		<tr>
			<th>Rut</th>
			<th>Nombre</th>
			<th>Mail</th>
			<th>Teléfono</th>
			<th>Celular</th>
			<th>Imagen</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($model->jefeutpcps as $jefe) : ?>
		<tr>
			<td><?php echo $jefe->RutJefeUTPCP ?></td>
			<td><?php echo $jefe->NombreJefeUTPCP ?></td>
			<td><?php echo $jefe->MailJefeUTPCP ?></td>
			<td><?php echo $jefe->TelefonoJefeUTPCP ?></td>
			<td><?php echo $jefe->CelularJefeUTPCP ?></td>
			<td><?php echo $jefe->ImagenJefeUTPCP ?></td>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>

<br/>
<h2>Profesor Coordinador de Prácticas CP </h2>
<table>
	<thead>
		<tr>
			<th>Rut</th>
			<th>Nombre</th>
			<th>Mail</th>
			<th>Teléfono</th>
			<th>Celular</th>
			<th>Imagen</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($model->profesorcoordinadorpracticacps as $profesor) : ?>
		<tr>
			<td><?php echo $profesor->RutProfCoordGuiaCp ?></td>
			<td><?php echo $profesor->NombreProfCoordGuiaCP ?></td>
			<td><?php echo $profesor->MailProfCoordGuiaCP ?></td>
			<td><?php echo $profesor->TelefonoProfCoordGuiaCP ?></td>
			<td><?php echo $profesor->CelularProfCoordGuiaCP ?></td>
			<td><?php echo $profesor->ImagenProfCoordGuiaCP ?></td>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>

<br/>
<h2>Profesor Guía CP </h2>
<table>
	<thead>
		<tr>
			<th>Rut</th>
			<th>Nombre</th>
			<th>Mail</th>
			<th>Teléfono</th>
			<th>Celular</th>
			<th>Imagen</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($model->profesorguiacps as $profesor) : ?>
		<tr>
			<td><?php echo $profesor->RutProfGuiaCP ?></td>
			<td><?php echo $profesor->NombreProfGuiaCP ?></td>
			<td><?php echo $profesor->MailProfGuiaCP ?></td>
			<td><?php echo $profesor->TelefonoProfGuiaCP ?></td>
			<td><?php echo $profesor->CelularProfGuiaCP ?></td>
			<td><?php echo $profesor->ImagenProfGuiaCP ?></td>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>