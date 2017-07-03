<?php

function isEmpty($table){
	$empty = true;
	$query = "select count(*) from ".$table."";
	$result=Yii::app()->db->createCommand($query)->queryScalar();
	
	if($result != 0){
		$empty = false;
	}else{
		$empty = true;
	}
	
	return $empty;
}

function getFileModel($fileAttrib,$table,$codTable,$id){
	$query = "select ".$fileAttrib." from ".$table." where ".$codTable." = '".$id."'";
	$result=Yii::app()->db->createCommand($query)->queryScalar();
	
	return $result;
}

function saveFilePath($table,$fileAttrib,$file,$codTable,$id){
	$query="update ".$table." set ".$fileAttrib." = '".$file."' where ".$codTable." = '".$id."';";
	Yii::app()->db->createCommand($query)->execute();
}

function contains($table,$codTable,$id){
	$query = "select count(*) from ".$table." where ".$codTable." = '".$id."'";
	$result=Yii::app()->db->createCommand($query)->queryScalar();
	
	return $result;
}

function deleteData($table,$codTable,$id){
	$query="delete from ".$table." where ".$codTable." ='".$id."'";
	Yii::app()->db->createCommand($query)->execute();
}

function getCodPractica($practica){
    $query = "select CodPractica from configuracionpractica where NombrePractica = '".$practica."'";
	$result=Yii::app()->db->createCommand($query)->queryScalar();
    
    return $result;
}

function getCodMencion($mencion){
    $query = "select CodMencion from mencion where NombreMencion = '".$mencion."'";
	$result=Yii::app()->db->createCommand($query)->queryScalar();
    
    return $result;
}

function checkData($mencion,$profesor,$practica,$centro)
{
    $existData = false;
    
    $tableMencion = "mencion";
    $codTableMencion = "NombreMencion";
    $existMencion = contains($tableMencion,$codTableMencion,$mencion);
    
    $tableProfesor = "profesorguiacp";
    $codTableProfesor = "RutProfGuiaCP";
    $existProfesor = contains($tableProfesor,$codTableProfesor,$profesor);
    
    $tablePractica = "configuracionpractica";
    $codTablePractica = "NombrePractica";
    $existPractica = contains($tablePractica,$codTablePractica,$practica);
    
    $tableCentro = "centropractica";
    $codTableCentro = "RBD";
    $existCentro = contains($tableCentro,$codTableCentro,$centro);
    
    if($existMencion != 0 && $existProfesor != 0 && $existPractica != 0 && $existCentro){
        $existData = true;
    }
    
    return $existData;
}

function checkExcelHeaderFormat($objPHPExcel){
    $validFormat = false;
    $i=1;
    $rut = trim($objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue());
    $nombre = trim($objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue());
    $clave = trim($objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue());
    $fecha = trim($objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue());
    $mencion = trim($objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue());
    $mail = trim($objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue());
    $telefono = trim($objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue());
    $celular = trim($objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue());
    $profesor = trim($objPHPExcel->getActiveSheet()->getCell('I'.$i)->getCalculatedValue());
    $practica = trim($objPHPExcel->getActiveSheet()->getCell('J'.$i)->getCalculatedValue());
    $centro = trim($objPHPExcel->getActiveSheet()->getCell('K'.$i)->getCalculatedValue());
    $imagen = trim($objPHPExcel->getActiveSheet()->getCell('L'.$i)->getCalculatedValue());
    $situacion = trim($objPHPExcel->getActiveSheet()->getCell('M'.$i)->getCalculatedValue());
    $observacion = trim($objPHPExcel->getActiveSheet()->getCell('N'.$i)->getCalculatedValue());
    
    if($rut == "Rut" && $nombre == "Nombre" && $clave == "Clave" && $fecha == "Año" && $mencion == "Mención" && $mail == "Correo" && $telefono == "Teléfono" && $celular == "Celular" && $profesor == "Profesor Guía CP" && $practica == "Práctica" && $centro = "Centro de Práctica" && $imagen == "Imagen" && $situacion == "Situación" && $observacion == "Comentario"){
        $validFormat = true;
    }
    
    return $validFormat;
}

function isEnabled(){
    
    $enabled = false;
    
    $tableCenter = "centropractica";
    $emptyCenter = isEmpty($tableCenter);
    
    $tableProfesor = "profesorguiacp";
    $emptyProfesor = isEmpty($tableProfesor);
    
    $tableMencion = "mencion";
    $emptyMencion = isEmpty($tableMencion);
    
    $tablePractica = "configuracionpractica";
    $emptyPractica = isEmpty($tablePractica);
    
    if($emptyCenter == false && $emptyProfesor == false && $emptyMencion == false && $emptyPractica == false){
        $enabled = true;
    }
    
    return $enabled;
}


function isPracticaEnabled(){
    $enabled = false;
    
    $tableSemestre = "semestre";
    $emptySemestre = isEmpty($tableSemestre);
    
    $tableCoordinador = "docentecoordinadorpracticas";
    $emptyCoordinador = isEmpty($tableCoordinador);
    
    $tableResponsable = "docenteresponsablepractica";
    $emptyResponsable = isEmpty($tableResponsable);
    
    if($emptySemestre == false && $emptyCoordinador == false && $emptyResponsable == false){
        $enabled = true;
    }
    
    return $enabled;
}

function isCentroEnabled(){
    $enabled = false;
    
    $tableDependencia = "dependencia";
    $emptyDependencia = isEmpty($tableDependencia);
    
    $tableNivelEducacional = "niveleducacional";
    $emptyNivelEducacional = isEmpty($tableNivelEducacional);
    
    if($emptyDependencia == false && $emptyNivelEducacional == false){
        $enabled = true;
    }
    
    return $enabled;
}

?>