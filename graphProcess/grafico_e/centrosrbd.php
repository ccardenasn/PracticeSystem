<?php

function getCentros()
{
	include('connect.php');
	$sql = "select RBD from centropractica;";
	$stmt = mysql_query($sql,$con);
	$datos = array();
	
	while($row=mysql_fetch_assoc($stmt))
	{
        $datos[] = $row;
	}
	
	return $datos;
}

function getPracticas()
{
	include('connect.php');
	$sql = "select NombrePractica from configuracionpractica;";
	$stmt = mysql_query($sql,$con);
	$practicas = array();
	
	while($row=mysql_fetch_assoc($stmt))
	{
        $practicas[] = $row;
	}
	
	return $practicas;
}