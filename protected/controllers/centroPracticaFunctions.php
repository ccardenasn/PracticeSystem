<?php

function containsProf($rut){
	$query="select count(*) from profesorguiacp where RutProfGuiaCP = '".$rut."';";
	$exist=Yii::app()->db->createCommand($query)->queryScalar();
	
	return $exist;
}

function getProfesorData($rbd){
	include('connect.php');
	$arr = array();
	$query = "select RutProfGuiaCP from profesorguiacp where CentroPractica_RBD = '".$rbd."'";
	$execquery	= mysql_query($query);
	
	while($row = mysql_fetch_assoc($execquery)){
		$arr['data'][] = $row['RutProfGuiaCP'];
	}
	
	return $arr;
}

function containsProfArr($arr,$data){
	$total = count($data);
	$find=false;
	$start=true;
	$j=0;
	while($start == true){
		if($arr == $data[$j]){
			$find = true;
			$start=false;
		}
		$j++;
		
		if($j == $total){
			$start = false;
		}
	}
	
	return $find;
}

function deleteProf($arr,$data){
	$start=true;
	$j=0;
	for($i=0;$i<count($arr);$i++){
			$exist=containsProfArr($arr['data'][$i],$data);
		if($exist == true){
			$query="delete from profesorguiacp where RutProfGuiaCP ='".$data[$i]."'";
			$exist=Yii::app()->db->createCommand($query)->execute();
		}
	}
}

function getImageModel($imageAttrib,$table,$codTable,$id){
	$query = "select ".$imageAttrib." from ".$table." where ".$codTable." = '".$id."'";
	$result=Yii::app()->db->createCommand($query)->queryScalar();
	
	return $result;
}

function saveImagePath($table,$imageAttrib,$image,$codTable,$id){
	$query="update ".$table." set ".$imageAttrib." = '".$image."' where ".$codTable." = '".$id."';";
	Yii::app()->db->createCommand($query)->execute();
}

?>