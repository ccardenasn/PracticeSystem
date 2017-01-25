<?php
include_once('connect.php');

$data = $_POST['horario'];
$query = "insert into horario(Estudiante_RutEstudiante,tablaHorario) values('10041351-5','".$data."');";

mysql_query($query,$con);
mysql_close($con);

?>