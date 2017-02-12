<?php
include_once('connect.php');
include_once('searchTimeBlocks.php');

$horario = $_POST['horario'];

for($i=0;$i<count($horario);$i++){
	$rut = $horario[$i][0];
	$asignatura = $horario[$i][1];
	$dia = $horario[$i][3];
	$bloque = $horario[$i][4];
	$horaInicio = getBlockInitTime($bloque,$con);
	$horaFin = getBlockEndTime($bloque,$con);
	
	if($asignatura != null){
		$query = "insert into Horario(Estudiante_RutEstudiante,Asignatura_NombreAsignatura,HoraInicio,HoraFin,Dia,Bloque) values('".$rut."','".$asignatura."','".$horaInicio."','".$horaFin."','".$dia."','".$bloque."');";
		
		mysql_query($query,$con);
	}
}

mysql_close($con);

?>