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

$arrprac = array();
$k=1;
for($i=0;$i<$praclistlength;$i++)
{
	$arrprac[$i] = array($k,$praclist[$i]['NombrePractica']);
	$k++;
}

//print_r($arrprac);

for($index=0;$index<$praclistlength;$index++)
{
	$result = containsprac($praclist,$index);
	
	if($result > 0)
	{
		$querydata = "select count(*),Ejecutado from planificacionclase
where ConfiguracionPractica_NombrePractica = '".$praclist[$index]['NombrePractica']."'
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
			$idcentro=$index;
			
			$insertquery = "insert into graph_data(numero,nombrepractica,idcentro) values('".$numeroalumnos."','".$nombrepractica."','".$idcentro."');";
			
			mysql_query($insertquery,$con);
		}
	}
}
}



