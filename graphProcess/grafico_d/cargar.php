<?php

function loadgraph()
{
	include('centrosrbd.php');
include('conrbd.php');
include('connect.php');

$deletequery = "truncate graph_data";
mysql_query($deletequery);

$querydata = "select count(*),NombreCentroPractica from estudiante 
inner join centropractica
on estudiante.CentroPractica_RBD = centropractica.RBD
group by NombreCentroPractica;";
		
$execquery = mysql_query($querydata,$con);
		
$data= array();
		
while($row=mysql_fetch_assoc($execquery))
{
	$data[] = $row;
}
		
//print_r($data);
		
$datalength = count($data);
		
for($i=0;$i<$datalength;$i++)
{
	$numero=$data[$i]['count(*)'];
	$nombrepractica=$data[$i]['NombreCentroPractica'];
	$idcentro= '1';
	
	$insertquery = "insert into graph_data(numero,nombrepractica,idcentro) values('".$numero."','".$nombrepractica."','".$idcentro."');";
	
	mysql_query($insertquery,$con);
}
	
//$querydataB = "select count(*),Dependencia_CodDependencia from centropractica group by Dependencia_CodDependencia;";

//$querydataB = "select count(*),Dependencia_CodDependencia,NombreDependencia from centropractica inner join Dependencia on centropractica.Dependencia_CodDependencia = dependencia.CodDependencia group by NombreDependencia;";
    
$querydataB = "select count(*),Dependencia_CodDependencia,NombreDependencia from ((estudiante inner join centropractica on estudiante.CentroPractica_RBD = centropractica.RBD) inner join dependencia on centropractica.Dependencia_CodDependencia = dependencia.CodDependencia) group by NombreDependencia;";    
		
$execqueryB = mysql_query($querydataB,$con);
		
$dataB= array();
		
while($rowB=mysql_fetch_assoc($execqueryB))
{
	$dataB[] = $rowB;
}
		
//print_r($data);
		
$datalengthB = count($dataB);
		
for($l=0;$l<$datalengthB;$l++)
{
	$numeroB=$dataB[$l]['count(*)'];
	$nombrepracticaB=$dataB[$l]['NombreDependencia'];
	$idcentroB= '2';
	
	$insertqueryB = "insert into graph_data(numero,nombrepractica,idcentro) values('".$numeroB."','".$nombrepracticaB."','".$idcentroB."');";
	
	mysql_query($insertqueryB,$con);
}
}





