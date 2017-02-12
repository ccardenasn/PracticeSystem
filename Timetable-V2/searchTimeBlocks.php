<?php

function getBlockInitTime($bloque,$con){
	$query = "select HoraInicio from bloque where NombreBloque = '".$bloque."';";
	$execQuery = mysql_query($query,$con);
	$initTime = mysql_result($execQuery,0);
	
	return $initTime;
}

function getBlockEndTime($bloque,$con){
	$query = "select HoraFin from bloque where NombreBloque = '".$bloque."';";
	$execQuery = mysql_query($query,$con);
	$endTime = mysql_result($execQuery,0);
	
	return $endTime;
}


?>