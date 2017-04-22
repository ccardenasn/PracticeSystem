<?php

function getTimeTableData($rutStudent){
	include_once("connect.php");
	$arr = array();
	$qr = "select * from horario where Estudiante_RutEstudiante = '".$rutStudent."';";
	$q = mysql_query($qr,$con);
	
	while($row = mysql_fetch_assoc($q)){
		$arr[] = $row;
	}
	
	mysql_close($con);
	
	return $arr;
}

function orderTimeTableData($rutStudent){
	$arr = getTimeTableData($rutStudent);
	$orderedData = array(30);
	
	for($j=0;$j<30;$j++){
		$orderedData[$j] = "Asignar";
	}
	
	for($i=0;$i<count($arr);$i++){
		
		if($arr[$i]['Dia'] == 'Lunes' && $arr[$i]['Bloque'] == 'Bloque 1'){
			$orderedData[0] = $arr[$i];
		}
		
		if($arr[$i]['Dia'] == 'Martes' && $arr[$i]['Bloque'] == 'Bloque 1'){
			$orderedData[1] = $arr[$i];
		}
		
		if($arr[$i]['Dia'] == 'Miercoles' && $arr[$i]['Bloque'] == 'Bloque 1'){
			$orderedData[2] = $arr[$i];
		}
		
		if($arr[$i]['Dia'] == 'Jueves' && $arr[$i]['Bloque'] == 'Bloque 1'){
			$orderedData[3] = $arr[$i];
		}
		
		if($arr[$i]['Dia'] == 'Viernes' && $arr[$i]['Bloque'] == 'Bloque 1'){
			$orderedData[4] = $arr[$i];
		}
		
		if($arr[$i]['Dia'] == 'Lunes' && $arr[$i]['Bloque'] == 'Bloque 2'){
			$orderedData[5] = $arr[$i];
		}
		
		if($arr[$i]['Dia'] == 'Martes' && $arr[$i]['Bloque'] == 'Bloque 2'){
			$orderedData[6] = $arr[$i];
		}
		
		if($arr[$i]['Dia'] == 'Miercoles' && $arr[$i]['Bloque'] == 'Bloque 2'){
			$orderedData[7] = $arr[$i];
		}
		
		if($arr[$i]['Dia'] == 'Jueves' && $arr[$i]['Bloque'] == 'Bloque 2'){
			$orderedData[8] = $arr[$i];
		}
		
		if($arr[$i]['Dia'] == 'Viernes' && $arr[$i]['Bloque'] == 'Bloque 2'){
			$orderedData[9] = $arr[$i];
		}
		
		if($arr[$i]['Dia'] == 'Lunes' && $arr[$i]['Bloque'] == 'Bloque 3'){
			$orderedData[10] = $arr[$i];
		}
		
		if($arr[$i]['Dia'] == 'Martes' && $arr[$i]['Bloque'] == 'Bloque 3'){
			$orderedData[11] = $arr[$i];
		}
		
		if($arr[$i]['Dia'] == 'Miercoles' && $arr[$i]['Bloque'] == 'Bloque 3'){
			$orderedData[12] = $arr[$i];
		}
		
		if($arr[$i]['Dia'] == 'Jueves' && $arr[$i]['Bloque'] == 'Bloque 3'){
			$orderedData[13] = $arr[$i];
		}
		
		if($arr[$i]['Dia'] == 'Viernes' && $arr[$i]['Bloque'] == 'Bloque 3'){
			$orderedData[14] = $arr[$i];
		}
		
		if($arr[$i]['Dia'] == 'Lunes' && $arr[$i]['Bloque'] == 'Bloque 4'){
			$orderedData[15] = $arr[$i];
		}
		
		if($arr[$i]['Dia'] == 'Martes' && $arr[$i]['Bloque'] == 'Bloque 4'){
			$orderedData[16] = $arr[$i];
		}
		
		if($arr[$i]['Dia'] == 'Miercoles' && $arr[$i]['Bloque'] == 'Bloque 4'){
			$orderedData[17] = $arr[$i];
		}
		
		if($arr[$i]['Dia'] == 'Jueves' && $arr[$i]['Bloque'] == 'Bloque 4'){
			$orderedData[18] = $arr[$i];
		}
		
		if($arr[$i]['Dia'] == 'Viernes' && $arr[$i]['Bloque'] == 'Bloque 4'){
			$orderedData[19] = $arr[$i];
		}
		
		if($arr[$i]['Dia'] == 'Lunes' && $arr[$i]['Bloque'] == 'Bloque 5'){
			$orderedData[20] = $arr[$i];
		}
		
		if($arr[$i]['Dia'] == 'Martes' && $arr[$i]['Bloque'] == 'Bloque 5'){
			$orderedData[21] = $arr[$i];
		}
		
		if($arr[$i]['Dia'] == 'Miercoles' && $arr[$i]['Bloque'] == 'Bloque 5'){
			$orderedData[22] = $arr[$i];
		}
		
		if($arr[$i]['Dia'] == 'Jueves' && $arr[$i]['Bloque'] == 'Bloque 5'){
			$orderedData[23] = $arr[$i];
		}
		
		if($arr[$i]['Dia'] == 'Viernes' && $arr[$i]['Bloque'] == 'Bloque 5'){
			$orderedData[24] = $arr[$i];
		}
		
		if($arr[$i]['Dia'] == 'Lunes' && $arr[$i]['Bloque'] == 'Bloque 6'){
			$orderedData[25] = $arr[$i];
		}
		
		if($arr[$i]['Dia'] == 'Martes' && $arr[$i]['Bloque'] == 'Bloque 6'){
			$orderedData[26] = $arr[$i];
		}
		
		if($arr[$i]['Dia'] == 'Miercoles' && $arr[$i]['Bloque'] == 'Bloque 6'){
			$orderedData[27] = $arr[$i];
		}
		
		if($arr[$i]['Dia'] == 'Jueves' && $arr[$i]['Bloque'] == 'Bloque 6'){
			$orderedData[28] = $arr[$i];
		}
		
		if($arr[$i]['Dia'] == 'Viernes' && $arr[$i]['Bloque'] == 'Bloque 6'){
			$orderedData[29] = $arr[$i];
		}
	}
	
	return $orderedData;
}

function getSubjectCellData($viewSubjects,$index){
	
	$resultSubject = "";
	if($viewSubjects[$index] != "Asignar"){
		$resultSubject = $viewSubjects[$index]['Asignatura_NombreAsignatura'];
	}else{
		$resultSubject = $viewSubjects[$index];
	}
	
	$encodedResult = Encoding::toUTF8($resultSubject);
	return $encodedResult;
}

function quitar_tildes($cadena) {
	$cadena = utf8_encode($cadena);
$no_permitidas= array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","À","Ã","Ì","Ò","Ù","Ã™","Ã ","Ã¨","Ã¬","Ã²","Ã¹","ç","Ç","Ã¢","ê","Ã®","Ã´","Ã»","Ã‚","ÃŠ","ÃŽ","Ã”","Ã›","ü","Ã¶","Ã–","Ã¯","Ã¤","«","Ò","Ã","Ã„","Ã‹");
$permitidas= array ("a","e","i","o","u","A","E","I","O","U","n","N","A","E","I","O","U","a","e","i","o","u","c","C","a","e","i","o","u","A","E","I","O","U","u","o","O","i","a","e","U","I","A","E");
$texto = str_replace($no_permitidas, $permitidas ,$cadena);
return $texto;
}

function copyPHPtoJavaScriptArr($copyArr){
	for($i=0;$i<count($copyArr);$i++){
		if($copyArr[$i] != "Asignar"){
			$cad = $copyArr[$i]["Asignatura_NombreAsignatura"];
			$cad = quitar_tildes($cad);
			$copyArr[$i]["Asignatura_NombreAsignatura"] = $cad;
		}
	}
	
	return $copyArr;
}


?>