<?php

function loadgraph()
{
include('centrosrbd.php');
include('conrbd.php');
include('connect.php');

$deletequery = "truncate graph_data";
mysql_query($deletequery);

$praclist = getPracticas();

$praclistlength = count($praclist);

for($index=0;$index<$praclistlength;$index++)
{
	$result = containsprac($praclist,$index);
	
	if($result > 0)
	{
		$querydata = "select count(*),Ejecutado,ConfiguracionPractica_CodPractica from planificacionclase
where ConfiguracionPractica_CodPractica = '".$praclist[$index]['CodPractica']."'
group by Ejecutado;";
		
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
			$numeroalumnos=$data[$i]['count(*)'];
			$nombrepractica=$data[$i]['Ejecutado'];
			$idcentro=$data[$i]['ConfiguracionPractica_CodPractica'];
			
			$insertquery = "insert into graph_data(numero,nombrepractica,idcentro) values('".$numeroalumnos."','".$nombrepractica."','".$idcentro."');";
			
			mysql_query($insertquery,$con);
		}
	}
}
}



