<?php

function containsProf($rut){
	$query="select count(*) from profesorguiacp where RutProfGuiaCP = '".$rut."';";
	$exist=Yii::app()->db->createCommand($query)->queryScalar();
	
	return $exist;
}

function getClasesData($bitacorasesionid){
	include('connect.php');
	$arr = array();
	$query = "select CodClase from clasebitacorasesion where BitacoraSesion_CodBitacora = '".$bitacorasesionid."'";
	$execquery	= mysql_query($query);
	
	while($row = mysql_fetch_assoc($execquery)){
		$arr['data'][] = $row['CodClase'];
	}
	
	return $arr;
}

function containsClassArr($arr,$data){
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

function containsLogBook($id){
	$query = "select count(*) from bitacorasesion where PlanificacionClase_CodPlanificacion = '".$id."'";
	$result=Yii::app()->db->createCommand($query)->queryScalar();
	
	return $result;
}

function getIdLogBook($id){
	$query = "select CodBitacora from bitacorasesion where PlanificacionClase_CodPlanificacion = '".$id."'";
	$result=Yii::app()->db->createCommand($query)->queryScalar();
	
	return $result;
}

function containsClaseLogBook($id){
	$query = "select count(*) from clasebitacorasesion where BitacoraSesion_CodBitacora = '".$id."'";
	$result=Yii::app()->db->createCommand($query)->queryScalar();
	
	return $result;
}

function deleteLogBookSesion($id){
	$query="delete from  clasebitacorasesion where BitacoraSesion_CodBitacora ='".$id."'";
	Yii::app()->db->createCommand($query)->execute();
}

function deleteLogBook($id){
	$query="delete from bitacorasesion where PlanificacionClase_CodPlanificacion ='".$id."'";
	Yii::app()->db->createCommand($query)->execute();
}

function findPlanningRut($id){
	$query = "select Estudiante_RutEstudiante from planificacionclase where CodPlanificacion = '".$id."'";
	$result=Yii::app()->db->createCommand($query)->queryScalar();
	
	return $result;
}

function findLogBookPlanning($id){
	$query = "select PlanificacionClase_CodPlanificacion from bitacorasesion where CodBitacora = '".$id."'";
	$result=Yii::app()->db->createCommand($query)->queryScalar();
	
	return $result;
}

?>