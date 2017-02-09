<?php

function getTimeTableData(){
	include_once("connect.php");
	$arr = array();
	$qr = "select * from timetable where RutEstudiante = '18016562-2';";
	$q =mysql_query($qr,$con);
	
	while($row = mysql_fetch_assoc($q)){
		$arr[] = $row;
	}
	
	mysql_close($con);
	
	return $arr;
}

function setTimeTableOrder($arr,$i){
	$result=0;
	
	if($arr[$i]['Dia'] == 'Lunes' && $arr[$i]['Bloque'] == 'Bloque 1'){
		$result = 0;
	}
	
	if($arr[$i]['Dia'] == 'Martes' && $arr[$i]['Bloque'] == 'Bloque 1'){
		$result = 1;
	}
	
	if($arr[$i]['Dia'] == 'Miercoles' && $arr[$i]['Bloque'] == 'Bloque 1'){
		$result = 2;
	}
	
	if($arr[$i]['Dia'] == 'Jueves' && $arr[$i]['Bloque'] == 'Bloque 1'){
		$result = 3;
	}
	
	if($arr[$i]['Dia'] == 'Viernes' && $arr[$i]['Bloque'] == 'Bloque 1'){
		$result = 4;
	}
	
	if($arr[$i]['Dia'] == 'Lunes' && $arr[$i]['Bloque'] == 'Bloque 2'){
		$result = 5;
	}
	
	if($arr[$i]['Dia'] == 'Martes' && $arr[$i]['Bloque'] == 'Bloque 2'){
		$result = 6;
	}
	
	if($arr[$i]['Dia'] == 'Miercoles' && $arr[$i]['Bloque'] == 'Bloque 2'){
		$result = 7;
	}
	
	if($arr[$i]['Dia'] == 'Jueves' && $arr[$i]['Bloque'] == 'Bloque 2'){
		$result = 8;
	}
	
	if($arr[$i]['Dia'] == 'Viernes' && $arr[$i]['Bloque'] == 'Bloque 2'){
		$result = 9;
	}
	
	if($arr[$i]['Dia'] == 'Lunes' && $arr[$i]['Bloque'] == 'Bloque 3'){
		$result = 10;
	}
	
	if($arr[$i]['Dia'] == 'Martes' && $arr[$i]['Bloque'] == 'Bloque 3'){
		$result = 11;
	}
	
	if($arr[$i]['Dia'] == 'Miercoles' && $arr[$i]['Bloque'] == 'Bloque 3'){
		$result = 12;
	}
	
	if($arr[$i]['Dia'] == 'Jueves' && $arr[$i]['Bloque'] == 'Bloque 3'){
		$result = 13;
	}
	
	if($arr[$i]['Dia'] == 'Viernes' && $arr[$i]['Bloque'] == 'Bloque 3'){
		$result = 14;
	}
	
	if($arr[$i]['Dia'] == 'Lunes' && $arr[$i]['Bloque'] == 'Bloque 4'){
		$result = 15;
	}
	
	if($arr[$i]['Dia'] == 'Martes' && $arr[$i]['Bloque'] == 'Bloque 4'){
		$result = 16;
	}
	
	if($arr[$i]['Dia'] == 'Miercoles' && $arr[$i]['Bloque'] == 'Bloque 4'){
		$result = 17;
	}
	
	if($arr[$i]['Dia'] == 'Jueves' && $arr[$i]['Bloque'] == 'Bloque 4'){
		$result = 18;
	}
	
	if($arr[$i]['Dia'] == 'Viernes' && $arr[$i]['Bloque'] == 'Bloque 4'){
		$result = 19;
	}
	
	if($arr[$i]['Dia'] == 'Lunes' && $arr[$i]['Bloque'] == 'Bloque 5'){
		$result = 20;
	}
	
	if($arr[$i]['Dia'] == 'Martes' && $arr[$i]['Bloque'] == 'Bloque 5'){
		$result = 21;
	}
	
	if($arr[$i]['Dia'] == 'Miercoles' && $arr[$i]['Bloque'] == 'Bloque 5'){
		$result = 22;
	}
	
	if($arr[$i]['Dia'] == 'Jueves' && $arr[$i]['Bloque'] == 'Bloque 5'){
		$result = 23;
	}
	
	if($arr[$i]['Dia'] == 'Viernes' && $arr[$i]['Bloque'] == 'Bloque 5'){
		$result = 24;
	}
	
	if($arr[$i]['Dia'] == 'Lunes' && $arr[$i]['Bloque'] == 'Bloque 6'){
		$result = 25;
	}
	
	if($arr[$i]['Dia'] == 'Martes' && $arr[$i]['Bloque'] == 'Bloque 6'){
		$result = 26;
	}
	
	if($arr[$i]['Dia'] == 'Miercoles' && $arr[$i]['Bloque'] == 'Bloque 6'){
		$result = 27;
	}
	
	if($arr[$i]['Dia'] == 'Jueves' && $arr[$i]['Bloque'] == 'Bloque 6'){
		$result = 28;
	}
	
	if($arr[$i]['Dia'] == 'Viernes' && $arr[$i]['Bloque'] == 'Bloque 6'){
		$result = 29;
	}
	
	return $result;
}

function orderTimeTableData(){
	$arr = getTimeTableData();
	$orderedData = array();
	
	for($i=0;$i<count($arr);$i++){
		$index = setTimeTableOrder($arr,$i);
		$orderedData[$index] = $arr[$i];
	}
	
	return $orderedData;
}
?>