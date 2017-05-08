<?php
include_once('consultaNombre.php');

$this->breadcrumbs=array(
	'Horarios'=>array('index'),
	'Crear Horario',
);

$this->menu=array(
	array('label'=>'Horarios', 'url'=>array('index')),
);

$rutStudent = Yii::app()->request->getQuery('id');
$nameStudent = nameQuery($rutStudent);
?>

<h1>Crear Horario</h1><br>

<div class="collapse">
	<h3>Ayuda</h3>
	<ul>
		<ul>
			<h4>Instrucciones</h4>
			<li>Haga click sobre el botón <img src="images/timeTableImages/addButton.png" height="15" width="15"> para añadir una asignatura al bloque y día seleccionados.</li>
			<li>A continuación se desplegará la ventana <strong>"Asignar Asignatura"</strong> en la parte inferior de la ventana, desde allí deberá seleccionar una de las opciones del menú deplegable <strong>"Semestres"</strong>, se cargará una lista en el menú <strong>"Semestres"</strong> correspondiente al semestre seleccionado, luego debe hacer click en el botón <strong>"Asignar"</strong></li>
			<li>Para eliminar una asignatura de un bloque haga clic en el botón <img src="images/timeTableImages/delButton.png" height="15" width="15">.</li>
			<li>Una vez que se han establecido las asignaturas en los horarios correspondientes, se debe presionar el botón <strong>"Guardar"</strong> para almacenar los cambios realizados.</li>
		</ul>
	</ul>
</div><br>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>

<h2>Estudiante: <?php echo $nameStudent; ?></h2>
<h2>Rut: <?php echo $rutStudent; ?></h2>

<div id="data">
   <?php $this->renderPartial('Timetable-V2/index',array('rutStudent' => $rutStudent)); ?>
</div>