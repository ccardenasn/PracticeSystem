<?php
include_once('connect.php');

$horario = $_POST['horario'];
$rut = $_POST['rut'];
$query = "insert into horario(Estudiante_RutEstudiante,tablaHorario) values('".$rut."','".$horario."');";

mysql_query($query,$con);
mysql_close($con);

?>