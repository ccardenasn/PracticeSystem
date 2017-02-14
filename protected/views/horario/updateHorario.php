<?php
include_once('consultaNombre.php');

$rutStudent = Yii::app()->user->name;
$nameStudent = nameQuery($rutStudent);
?>

<h1>Modificar Horario</h1>
<h2>Estudiante: <?php echo $nameStudent; ?></h2>
<h2>Rut: <?php echo $rutStudent; ?></h2>

<div id="data">
   <?php $this->renderPartial('Timetable-V2/viewTable',array('rutStudent' => $rutStudent)); ?>
</div>