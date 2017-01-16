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
	$sql = "select * from configuracionpractica;";
	$stmt = mysql_query($sql,$con);
	$practicas = array();
	
	while($row=mysql_fetch_assoc($stmt))
	{
        $practicas[] = $row;
	}
	
	return $practicas;
}

function getEstudiantes($centro,$practica,$a,$b)
{
	include('connect.php');
	$sql = "select RutEstudiante,ConfiguracionPractica_NombrePractica,CentroPractica_RBD from estudiante where CentroPractica_RBD = '".$centro[$a]['RBD']."' and ConfiguracionPractica_NombrePractica = '".$practica[$b]['NombrePractica']."';";
	$stmt = mysql_query($sql,$con);
	$estudiantes = array();
	
	while($row=mysql_fetch_assoc($stmt))
	{
        $estudiantes[] = $row;
	}
	
	return $estudiantes;
}