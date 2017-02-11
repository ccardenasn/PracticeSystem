<?php
include_once('connect.php');

$time = $_POST['time'];
$cellState = $_POST['cellState'];

if($cellState == 1){
	$query = "update bloque set HoraInicio = '".$time."' where NombreBloque = 'Bloque 1';";	
	mysql_query($query,$con);
}

if($cellState == 2){
	$query = "update bloque set HoraFin = '".$time."' where NombreBloque = 'Bloque 1';";	
	mysql_query($query,$con);
}

if($cellState == 3){
	$query = "update bloque set HoraInicio = '".$time."' where NombreBloque = 'Bloque 2';";	
	mysql_query($query,$con);
}

if($cellState == 4){
	$query = "update bloque set HoraFin = '".$time."' where NombreBloque = 'Bloque 2';";	
	mysql_query($query,$con);
}

if($cellState == 5){
	$query = "update bloque set HoraInicio = '".$time."' where NombreBloque = 'Bloque 3';";	
	mysql_query($query,$con);
}

if($cellState == 6){
	$query = "update bloque set HoraFin = '".$time."' where NombreBloque = 'Bloque 3';";	
	mysql_query($query,$con);
}

if($cellState == 7){
	$query = "update bloque set HoraInicio = '".$time."' where NombreBloque = 'Bloque 4';";	
	mysql_query($query,$con);
}

if($cellState == 8){
	$query = "update bloque set HoraFin = '".$time."' where NombreBloque = 'Bloque 4';";	
	mysql_query($query,$con);
}

if($cellState == 9){
	$query = "update bloque set HoraInicio = '".$time."' where NombreBloque = 'Bloque 5';";	
	mysql_query($query,$con);
}

if($cellState == 10){
	$query = "update bloque set HoraFin = '".$time."' where NombreBloque = 'Bloque 5';";	
	mysql_query($query,$con);
}

if($cellState == 11){
	$query = "update bloque set HoraInicio = '".$time."' where NombreBloque = 'Bloque 6';";	
	mysql_query($query,$con);
}

if($cellState == 12){
	$query = "update bloque set HoraFin = '".$time."' where NombreBloque = 'Bloque 6';";	
	mysql_query($query,$con);
}



mysql_close($con);
?>