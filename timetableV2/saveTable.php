<?php
include_once('connect.php');

$horario = $_POST['horario'];

$asignatura = $horario[0][0];
$condicion = $horario[0][1];
$dia = $horario[0][2];
$bloque = $horario[0][3];

	
$query = "insert into timetable(Asignatura,HoraInicio,HoraFin,Dia,Bloque) values('".$asignatura."','09:00','10:30','".$dia."','".$bloque."');";

mysql_query($query,$con);
mysql_close($con);

?>