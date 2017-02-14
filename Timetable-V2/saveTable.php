<?php
include_once('connect.php');
include_once('searchTimeBlocks.php');

$horario = $_POST['horario'];
$accion = $_POST['action'];

for($i=0;$i<count($horario);$i++){
	$rut = $horario[$i][0];
	$asignatura = $horario[$i][1];
	$dia = $horario[$i][3];
	$bloque = $horario[$i][4];
	$horaInicio = getBlockInitTime($bloque,$con);
	$horaFin = getBlockEndTime($bloque,$con);
	
	if($asignatura != null){
		
		if($accion == "Create"){
			$query = "insert into Horario(Estudiante_RutEstudiante,Asignatura_NombreAsignatura,HoraInicio,HoraFin,Dia,Bloque) values('".$rut."','".$asignatura."','".$horaInicio."','".$horaFin."','".$dia."','".$bloque."');";	
			mysql_query($query,$con);
			
		}else{
			$queryCount = "select count(*) from horario where Estudiante_RutEstudiante = '".$rut."' and Dia = '".$dia."' and Bloque = '".$bloque."';";
			
			$execQueryCount = mysql_query($queryCount,$con);
			$existResult = mysql_result($execQueryCount,0);
			
			if($existResult == 1){
				$queryUpdate = "update horario set Asignatura_NombreAsignatura='".$asignatura."' where Estudiante_RutEstudiante = '".$rut."' and Dia = '".$dia."' and Bloque = '".$bloque."';";
				mysql_query($queryUpdate,$con);
			}else{
				$queryCreate = "insert into Horario(Estudiante_RutEstudiante,Asignatura_NombreAsignatura,HoraInicio,HoraFin,Dia,Bloque) values('".$rut."','".$asignatura."','".$horaInicio."','".$horaFin."','".$dia."','".$bloque."');";
				mysql_query($queryCreate,$con);
			}
		}
	}
}

mysql_close($con);

?>