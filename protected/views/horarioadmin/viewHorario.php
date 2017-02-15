<?php
include_once('consultaNombre.php');

$nameStudent = nameQuery($model->Estudiante_RutEstudiante);
?>

<h1>Ver Horario</h1>
<h2>Estudiante: <?php echo $nameStudent; ?></h2>
<h2>Rut: <?php echo $model->Estudiante_RutEstudiante; ?></h2>

<div id="data">
   <?php $this->renderPartial('Timetable-V2/viewTable',array('model' => $model)); ?>
</div>