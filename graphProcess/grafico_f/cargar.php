<?php

function loadgraph()
{
	include('centrosrbd.php');
	include('conrbd.php');
	include('connect.php');
	
	$deletequery = "truncate graph_data";
	mysql_query($deletequery);
	
	$querydata = "select count(*),centropractica.NombreCentroPractica from profesorguiacp inner join centropractica on profesorguiacp.CentroPractica_RBD = centropractica.RBD group by CentroPractica_RBD;";
	
	$execquery = mysql_query($querydata,$con);
	$data= array();
	
	while($row=mysql_fetch_assoc($execquery))
	{
		$data[] = $row;
	}
	
	$datalength = count($data);
	
	for($i=0;$i<$datalength;$i++)
	{
		$numeroalumnos=$data[$i]['count(*)'];
		$nombrepractica=$data[$i]['NombreCentroPractica'];
		$idcentro=1;
		
		$insertquery = "insert into graph_data(numero,nombrepractica,idcentro) values('".$numeroalumnos."','".$nombrepractica."','".$idcentro."');";
		
		mysql_query($insertquery,$con);
	}	
}