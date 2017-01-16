<?php

function loadgraph()
{
	include('centrosrbd.php');
	include('conrbd.php');
	include('connect.php');
	
	$deletequery = "truncate graph_data";
	mysql_query($deletequery);
	
	$rbdlist = getCentros();
	$rbdlistlength = count($rbdlist);
	
	for($index=0;$index<$rbdlistlength;$index++)
	{
		$result = containsrbd($rbdlist,$index);
		
		if($result > 0)
		{
			$querydata = "select count(*),estudiante.ConfiguracionPractica_NombrePractica,estudiante.CentroPractica_RBD from estudiante inner join planificacionclase on planificacionclase.Estudiante_RutEstudiante = estudiante.RutEstudiante where estudiante.CentroPractica_RBD = '".$rbdlist[$index]['RBD']."' group by ConfiguracionPractica_NombrePractica;";
			
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
				$nombrepractica=$data[$i]['ConfiguracionPractica_NombrePractica'];
				$idcentro=$data[$i]['CentroPractica_RBD'];
				
				$insertquery = "insert into graph_data(numero,nombrepractica,idcentro) values('".$numeroalumnos."','".$nombrepractica."','".$idcentro."');";
				
				mysql_query($insertquery,$con);
			}
		}
	}
}



