<?php

function containsrbd($rbd,$index)
{
	include('connect.php');
	
	$querya="select count(*) from estudiante where CentroPractica_RBD = '".$rbd[$index]['RBD']."';";
	$execa=mysql_query($querya,$con);
	$resulta=mysql_result($execa,0);
	
	return $resulta;
}

function containsprac($nom,$index)
{
	include('connect.php');
	
	$queryb="select count(*) from estudiante where ConfiguracionPractica_CodPractica = '".$nom[$index]['CodPractica']."';";
	$execb=mysql_query($queryb,$con);
	$resultb=mysql_result($execb,0);
	
	return $resultb;
}