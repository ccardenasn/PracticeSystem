<?php
/* @var $this CentropracticaController */
/* @var $model Centropractica */

$this->pageTitle= Yii::app()->name." - "."Detalles";

$this->breadcrumbs=array(
	'Centros de Práctica'=>array('index'),
	$model->NombreCentroPractica,
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Editar', 'url'=>array('update', 'id'=>$model->RBD)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RBD),'confirm'=>'¿Está seguro de querer eliminar este elemento?')),
	array('label'=>'Adminsitración', 'url'=>array('admin')),
    array('label'=>'Crear PDF', 'url'=>array('pdf','id'=>$model->RBD)),
);
?>

<h1>Centro de Práctica: <?php echo $model->NombreCentroPractica; ?></h1><br>
	
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
			<li>Haga click en <strong>"Añadir"</strong> para agregar un nuevo centro a la lista.</li>
			<li>Haga click en <strong>"Editar"</strong> para modificar información de centro.</li>
			<li>Haga click en <strong>"Eliminar"</strong> para borrar toda la información de centro.</li>
			<li>Desde la sección <strong>"Administración"</strong> se puede observar una lista de centros existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en <strong>"Administración"</strong> en el panel <strong>"Opciones"</strong> para acceder.</li>
			<li>Para regresar al índice de menciones haga click en <strong>"Lista"</strong>.</li>
            <li>Haga click en <strong>"Crear PDF"</strong> para generar un documento en formato <strong>.pdf</strong> con información de centro de práctica.</li>
		</ul>
	</ul>
	
	<h3>Detalles</h3>
	<ul>
		<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
    'cssFile' => Yii::app()->baseUrl .'/css/detailview/styles.css',
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
		'dependenciaCodDependencia.NombreDependencia',
		'nivelEducacionalCodNivel.NombreNivel',
		'Area',
		'regionCodRegion.NombreRegion',
		'provinciaCodProvincia.NombreProvincia',
		'ciudadCodCiudad.NombreCiudad',
		'Calle',
        array(
            'name'=>'ImagenCentroPractica',
			'type' => 'raw',
            'value'=>CHtml::Image(Yii::app()->request->baseUrl.'/images/ImagenCentroPracticas/'.$model->ImagenCentroPractica,"Sin Imagen Disponible",array('onerror'=>"if (this.src != '".Yii::app()->request->baseUrl."/images/FormImages/centerplaceholder.jpg"."') this.src = '".Yii::app()->request->baseUrl."/images/FormImages/centerplaceholder.jpg"."';",'width'=>'400px','height'=>'200px')),
            ),
	),
)); ?>
	</ul>
	
	<h3>Secretaria CP</h3>
	<ul>
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
				<?php foreach($model->secretariacps as $secretaria) : ?>
				<tr>
					<td><?php echo $secretaria->RutSecretariaCP ?></td>
					<td><?php echo $secretaria->NombreSecretariaCP ?></td>
					<td><?php echo $secretaria->MailSecretariaCP ?></td>
					<td><?php echo $secretaria->TelefonoSecretariaCP ?></td>
					<td><?php echo $secretaria->CelularSecretariaCP ?></td>
					<td><?php echo CHtml::Image(Yii::app()->request->baseUrl.'/images/ImagenSecretariasCP/'.$secretaria->ImagenSecretariaCP,"Sin Imagen Disponible",array('onerror'=>"if (this.src != '".Yii::app()->request->baseUrl."/images/FormImages/userplaceholder.jpg"."') this.src = '".Yii::app()->request->baseUrl."/images/FormImages/userplaceholder.jpg"."';",'width'=>'50px','height'=>'50px'))?></td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</ul>
	
	<h3>Director CP</h3>
	<ul>
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
				<?php foreach($model->directorcps as $director) : ?>
				<tr>
					<td><?php echo $director->RutDirectorCP ?></td>
					<td><?php echo $director->NombreDirectorCP ?></td>
					<td><?php echo $director->MailDirectorCP ?></td>
					<td><?php echo $director->TelefonoDirectorCP ?></td>
					<td><?php echo $director->CelularDirectorCP ?></td>
					<td><?php echo CHtml::Image(Yii::app()->request->baseUrl.'/images/ImagenDirectoresCP/'.$director->ImagenDirectorCP,"Sin Imagen Disponible",array('onerror'=>"if (this.src != '".Yii::app()->request->baseUrl."/images/FormImages/userplaceholder.jpg"."') this.src = '".Yii::app()->request->baseUrl."/images/FormImages/userplaceholder.jpg"."';",'width'=>'50px','height'=>'50px'))?></td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</ul>
	
	<h3>Jefe UTP CP</h3>
	<ul>
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
				<?php foreach($model->jefeutpcps as $jefe) : ?>
				<tr>
					<td><?php echo $jefe->RutJefeUTPCP ?></td>
					<td><?php echo $jefe->NombreJefeUTPCP ?></td>
					<td><?php echo $jefe->MailJefeUTPCP ?></td>
					<td><?php echo $jefe->TelefonoJefeUTPCP ?></td>
					<td><?php echo $jefe->CelularJefeUTPCP ?></td>
					<td><?php echo CHtml::Image(Yii::app()->request->baseUrl.'/images/ImagenJefesUTPCP/'.$jefe->ImagenJefeUTPCP,"Sin Imagen Disponible",array('onerror'=>"if (this.src != '".Yii::app()->request->baseUrl."/images/FormImages/userplaceholder.jpg"."') this.src = '".Yii::app()->request->baseUrl."/images/FormImages/userplaceholder.jpg"."';",'width'=>'50px','height'=>'50px'))?></td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</ul>
	
	<h3>Profesor Coordinador de Prácticas CP </h3>
	<ul>
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
				<?php foreach($model->profesorcoordinadorpracticacps as $profesor) : ?>
				<tr>
					<td><?php echo $profesor->RutProfCoordGuiaCp ?></td>
					<td><?php echo $profesor->NombreProfCoordGuiaCP ?></td>
					<td><?php echo $profesor->MailProfCoordGuiaCP ?></td>
					<td><?php echo $profesor->TelefonoProfCoordGuiaCP ?></td>
					<td><?php echo $profesor->CelularProfCoordGuiaCP ?></td>
					<td><?php echo CHtml::Image(Yii::app()->request->baseUrl.'/images/ImagenCoordinadoresPracticasCP/'.$profesor->ImagenProfCoordGuiaCP,"Sin Imagen Disponible",array('onerror'=>"if (this.src != '".Yii::app()->request->baseUrl."/images/FormImages/userplaceholder.jpg"."') this.src = '".Yii::app()->request->baseUrl."/images/FormImages/userplaceholder.jpg"."';",'width'=>'50px','height'=>'50px'))?></td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</ul>
	
	<h3>Profesor Guía CP </h3>
	<ul>
		<table>
			<thead>
				<tr>
					<th>Rut</th>
					<th>Nombre</th>
					<th>Curso</th>
					<th>Correo</th>
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
					<td><?php echo $profesor->CursoProfGuiaCP ?></td>
					<td><?php echo $profesor->MailProfGuiaCP ?></td>
					<td><?php echo $profesor->TelefonoProfGuiaCP ?></td>
					<td><?php echo $profesor->CelularProfGuiaCP ?></td>
					<td><?php echo CHtml::Image(Yii::app()->request->baseUrl.'/images/ImagenProfesoresGuiaCP/'.$profesor->ImagenProfGuiaCP,"Sin Imagen Disponible",array('onerror'=>"if (this.src != '".Yii::app()->request->baseUrl."/images/FormImages/userplaceholder.jpg"."') this.src = '".Yii::app()->request->baseUrl."/images/FormImages/userplaceholder.jpg"."';",'width'=>'50px','height'=>'50px'))?></td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</ul>
</div><br>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>
