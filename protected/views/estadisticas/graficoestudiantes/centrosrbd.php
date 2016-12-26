<?php

function getCentros()
{
	include('graficoestudiantes/connect.php');
	$sql = "select RBD from centropractica;";
	$stmt = mysql_query($sql,$con);
	$datos = array();
	
	while($row=mysql_fetch_assoc($stmt))
	{
        $datos[] = $row;
	}
	
	return $datos;
}