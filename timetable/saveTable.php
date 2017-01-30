<?php
include_once('connect.php');

$horario = $_POST['horario'];
$rut = $_POST['rut'];
$mainAction = $_POST['action'];

if($mainAction == "Create"){
	$query = "insert into horario(Estudiante_RutEstudiante,tablaHorario) values('".$rut."','".$horario."');";
	mysql_query($query,$con);
}else{
	$query = "update horario set tablaHorario='".$horario."' where Estudiante_RutEstudiante='".$rut."';";
	mysql_query($query,$con);
}

mysql_close($con);

?>