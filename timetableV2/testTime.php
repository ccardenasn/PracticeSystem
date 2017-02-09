<?php
include('viewTimeTableProcess.php');

$arr = getTimeTableData();
$orderedData = array();
for($i=0;$i<count($arr);$i++){
	
	$index = setTimeTableOrder($arr,$i);
	$orderedData[$index] = $arr[$i];
}

print_r($orderedData);

?>