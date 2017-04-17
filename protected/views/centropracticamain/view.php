<?php
/* @var $this CentropracticamainController */
/* @var $model Centropractica */

$this->breadcrumbs=array(
	'Centro de Prácticas'=>array('index'),
	$model->RBD,
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->RBD)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RBD),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Adminsitración', 'url'=>array('admin')),
);
?>

<h1>Centro de Práctica: <?php echo $model->NombreCentroPractica; ?></h1><br>
	
<div class="collapse">
	<h3>Ayuda</h3>
	<ul>
		<ul>
			<h4>Instrucciones de Opciones</h4>
			<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
			<li>Haga click en <b>"Añadir"</b> para agregar un nuevo centro a la lista.</li>
			<li>Haga click en <b>"Actualizar"</b> para modificar información de centro.</li>
			<li>Haga click en <b>"Eliminar"</b> para borrar toda la información de centro.</li>
			<li>Desde la sección <b>"Administración"</b> se puede observar una lista de centros existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en <b>"Administración"</b> en el panel <b>"Opciones"</b> para acceder.</li>
			<li>Para regresar al índice de menciones haga click en <b>"Lista"</b>.</li>
		</ul>
	</ul>
</div><br>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'RBD',
		'NombreCentroPractica',
		'VigenciaProtocolo',
		'FechaProtocolo',
		array(
            'name'=>'Anexo Protocolo (click en el enlace)',
			'type' => 'raw',
            'value'=>CHtml::link(CHtml::encode($model->AnexoProtocolo), Yii::app()->baseUrl .'/PDFFiles/'.$model->AnexoProtocolo,array('target'=>'_blank'))
            ),
		'Dependencia',
		'NivelEducacional',
		'Area',
		'regionCodRegion.NombreRegion',
		'provinciaCodProvincia.NombreProvincia',
		'ciudadCodCiudad.NombreCiudad',
		'Calle',
		array(
            'name'=>'ImagenCentroPractica',
			'type' => 'raw',
            'value'=>CHtml::Image(Yii::app()->request->baseUrl.'/images/ImagenCentroPracticas/'.$model->ImagenCentroPractica)
            ),
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