<?php
include('viewTimeTableProcess.php');

$arr = getTimeTableData();
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

print_r($orderedData);

?>