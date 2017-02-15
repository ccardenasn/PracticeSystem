<?php
include_once('connect.php');

$horario = $_POST['horario'];

for($i=0;$i<count($horario);$i++){
	$asignatura = $horario[$i][0];
	$dia = $horario[$i][2];
	$bloque = $horario[$i][3];
	
	if($asignatura != null){
		$query = "insert into timetable(RutEstudiante,Asignatura,HoraInicio,HoraFin,Dia,Bloque) values('18016562-2','".$asignatura."','09:00','10:30','".$dia."','".$bloque."');";
		
		mysql_query($query,$con);
	}
}

mysql_close($con);

?>