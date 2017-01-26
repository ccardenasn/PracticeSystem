<?php
include_once('connect.php');

$initTime = $_POST['initTime'];
$cellState = $_POST['cellState'];

if($cellState == "1"){
	
	$query = "update bloque set HoraInicio = '".$initTime."' where NombreBloque = 'Bloque 1';";	
	mysql_query($query,$con);
}

mysql_close($con);


?>

