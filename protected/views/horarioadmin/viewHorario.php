<?php
include_once('consultaNombre.php');

$this->breadcrumbs=array(
	'Horarios'=>array('index'),
	'Ver Horario',
);

$this->menu=array(
	array('label'=>'Horarios', 'url'=>array('index')),
);

$nameStudent = nameQuery($model->Estudiante_RutEstudiante);
?>

<h1>Ver Horario</h1><br>

<ul>
	<h4>Instrucciones</h4>
	<li>Haga click sobre el botón + para añadir una asignatura al bloque y día seleccionados.</li>
	<li>A continuación se desplegará la ventana "Asignar Asignatura" en la parte inferior de la ventana, desde allí deberá seleccionar una de las opciones del menú deplegable "Semestres", se cargará una lista en el menú "Semestres" correspondiente al semestre seleccionado, luego debe hacer click en el botón "Asignar"</li>
	<li>Para eliminar una asignatura de un bloque haga clic en el botón x.</li>
	<li>Una vez que se han establecido las asignaturas en los horarios correspondientes, se debe presionar el botón "Guardar" para almacenar los cambios realizados.</li>
</ul>

<h2>Estudiante: <?php echo $nameStudent; ?></h2>
<h2>Rut: <?php echo $model->Estudiante_RutEstudiante; ?></h2>

<div id="data">
   <?php $this->renderPartial('Timetable-V2/viewTable',array('model' => $model)); ?>
</div>