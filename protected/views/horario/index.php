<?php
$this->breadcrumbs=array(
	'Horarios',
);

?>

<h1>Horarios</h1><br>

<h3>Bienvenido a la sección de Horario.</h3><br>

<?php if(Yii::app()->user->hasFlash('message')):?>
<div class="row buttons">
	<?php echo Yii::app()->user->getFlash('message'); ?>
</div>
<?php endif; ?>

<ul>
	<h4>Opciones Disponibles</h4>
	<li style="text-align: justify;"><strong>Crear Horario:</strong> Esta opción permite generar una tabla compuesta por los días de la semana, además de cada bloque correspondiente a las asignaturas que se cursarán. Una vez allí El usuario podrá añadir las asignaturas que esté cursando durante el semestre.</li><br>
	<li style="text-align: justify;"><strong>Editar Horario:</strong> Permite realizar modificaciones al horario, como añadir o reemplazar asignaturas en los bloques correspondientes.</li>
	
</ul>
<p><br/>
	
<?php
	
$this->menu=array(
	array('label'=>'Crear Horario', 'url'=>array('createHorario')),
	array('label'=>'Editar Horario', 'url'=>array('updateHorario')),
);
	
?>
	
	