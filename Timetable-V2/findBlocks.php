<?php

function hourColumns()
{
	include('connect.php');
	
	$query = "select * from bloque";
	
	$st = mysql_query($query,$con);
	$arr = array();
	$i=0;
	while($rows = mysql_fetch_array($st))
	{
		$arr[$i] = array($rows['HoraInicio'],$rows['HoraFin']);
		$i++;
	}
	
	return $arr;
}

?>