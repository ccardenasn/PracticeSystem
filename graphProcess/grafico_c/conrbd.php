<?php

function containsrbd($rbd,$index)
{
	include('connect.php');
	
	$querya="select count(*) from planificacionclase where planificacionclase.CentroPractica_RBD = '".$rbd[$index]['RBD']."';";
	$execa=mysql_query($querya,$con);
	$resulta=mysql_result($execa,0);
	
	return $resulta;
}

function containsprac($nom,$index)
{
	include('connect.php');
	
	$queryb="select count(*) from estudiante where ConfiguracionPractica_NombrePractica = '".$nom[$index]['NombrePractica']."';";
	$execb=mysql_query($queryb,$con);
	$resultb=mysql_result($execb,0);
	
	return $resultb;
}

function containsest($nom,$index)
{
	include('connect.php');
	
	$queryc="select count(*) from estudiante where RutEstudiante = '".$nom[$index]['RutEstudiante']."';";
	$execc=mysql_query($queryc,$con);
	$resultc=mysql_result($execc,0);
	
	return $resultc;
}