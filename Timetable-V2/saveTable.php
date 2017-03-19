<?php
include_once('ForceUTF/Encoding.php');
include_once('connect.php');
include_once('searchTimeBlocks.php');

$horario = $_POST['horario'];
$accion = $_POST['action'];
$rutData = $_POST['rut'];

$queryExistStudent = "select count(*) from horarioadmin where Estudiante_RutEstudiante = '".$rutData."';";
$execQueryStCount = mysql_query($queryExistStudent,$con);
$existStResult = mysql_result($execQueryStCount,0);

if($existStResult == 0){
	$querySt = "insert into horarioadmin(Estudiante_RutEstudiante) values('".$rutData."');";	
	mysql_query($querySt,$con);
}

$queryGtCod = "select CodHorario from horarioadmin where Estudiante_RutEstudiante = '".$rutData."';";
$execQueryGt = mysql_query($queryGtCod,$con);
$existGtResult = mysql_result($execQueryGt,0);

for($i=0;$i<count($horario);$i++){
	$rut = $horario[$i][0];
	$asignatura = $horario[$i][1];
	$dia = $horario[$i][3];
	$bloque = $horario[$i][4];
	$horaInicio = getBlockInitTime($bloque,$con);
	$horaFin = getBlockEndTime($bloque,$con);
	
	if($asignatura != null){
		
		if($accion == "Create"){
			$query = "insert into Horario(Estudiante_RutEstudiante,Asignatura_NombreAsignatura,HoraInicio,HoraFin,Dia,Bloque,HorarioAdmin_CodHorario) values('".$rut."','".$asignatura."','".$horaInicio."','".$horaFin."','".$dia."','".$bloque."','".$existGtResult."');";	
			mysql_query($query,$con);
			
		}else{
			$queryCount = "select count(*) from horario where Estudiante_RutEstudiante = '".$rut."' and Dia = '".$dia."' and Bloque = '".$bloque."';";
			
			$execQueryCount = mysql_query($queryCount,$con);
			$existResult = mysql_result($execQueryCount,0);
			
			if($existResult == 1){
				if($asignatura != "Asignar"){
					$queryUpdate = "update horario set Asignatura_NombreAsignatura='".$asignatura."' where Estudiante_RutEstudiante = '".$rut."' and Dia = '".$dia."' and Bloque = '".$bloque."';";
					mysql_query($queryUpdate,$con);
				}else{
					$queryDelete = "delete from horario where Estudiante_RutEstudiante = '".$rut."' and Dia = '".$dia."' and Bloque = '".$bloque."';";
					mysql_query($queryDelete,$con);
				}
				
			}else{
				$queryCreate = "insert into Horario(Estudiante_RutEstudiante,Asignatura_NombreAsignatura,HoraInicio,HoraFin,Dia,Bloque,HorarioAdmin_CodHorario) values('".$rut."','".$asignatura."','".$horaInicio."','".$horaFin."','".$dia."','".$bloque."','".$existGtResult."');";
				mysql_query($queryCreate,$con);
			}
		}
	}
}

mysql_close($con);

?>