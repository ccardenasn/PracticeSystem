<?php

function datosplanificacion($estudiantelogged)
{   
    $queryA="select NombreEstudiante from estudiante where RutEstudiante = '".$estudiantelogged."';";
    $nombredata=Yii::app()->db->createCommand($queryA)->queryScalar();
    $arrplanificacion[0]=$nombredata;
    
    $queryB="select ProfesorGuiaCP_RutProfGuiaCP from estudiante where RutEstudiante='".$estudiantelogged."';";
    $rutprofdata=Yii::app()->db->createCommand($queryB)->queryScalar();
    $arrplanificacion[1]=$rutprofdata;
    
    $queryC="select NombreProfGuiaCP from profesorguiacp where RutProfGuiaCP = '".$rutprofdata."';";
    $nombreprofdata=Yii::app()->db->createCommand($queryC)->queryScalar();
    $arrplanificacion[2]=$nombreprofdata;
    
    $queryD="select ConfiguracionPractica_NombrePractica from estudiante where RutEstudiante = '".$estudiantelogged."';";
    $practicadata=Yii::app()->db->createCommand($queryD)->queryScalar();
    $arrplanificacion[3]=$practicadata;
    
    $queryE="select CursoProfGuiaCP from profesorguiacp where RutProfGuiaCP = '".$rutprofdata."';";    
    $cursodata=Yii::app()->db->createCommand($queryE)->queryScalar();
    $arrplanificacion[4]=$cursodata;
    
    $queryF="select NumeroSesionesPractica from configuracionpractica where NombrePractica = '".$practicadata."';";
    $sesiondata=Yii::app()->db->createCommand($queryF)->queryScalar();
    $arrplanificacion[5]=$sesiondata;
    
    $queryG="select NumeroHorasPractica from configuracionpractica where NombrePractica = '".$practicadata."';";
    $horasdata=Yii::app()->db->createCommand($queryG)->queryScalar();
    $arrplanificacion[6]=$horasdata;
	
	$queryH="select CentroPractica_RBD from estudiante where RutEstudiante = '".$estudiantelogged."';";
	$centrodata=Yii::app()->db->createCommand($queryH)->queryScalar();
    $arrplanificacion[7]=$centrodata;
	
    return $arrplanificacion;
}

function searchSesion($sesion,$rut)
{
	$query="select count(*) from planificacionclase where SesionInformada = '".$sesion."' and Estudiante_RutEstudiante = '".$rut."';";
	$sesiondata=Yii::app()->db->createCommand($query)->queryScalar();
	
	return $sesiondata;
}

function listsesion($total,$rut)
{
    $sesiones = array();
	$contains=0;
	$sesion=1;
    for($i=1;$i<=$total;$i++){
		
		$contains=searchSesion($sesion,$rut);
		if($contains == 0)
		{
			$sesiones[$i] = $sesion;
		}
		$sesion=$sesion+1;
    }
    
    return $sesiones;
}

function viewData($rbd)
{
	$arrcentro = array();
	$queryI="select NombreCentroPractica from centropractica where RBD = '".$rbd."';";
	$centrodata=Yii::app()->db->createCommand($queryI)->queryScalar();
    $arrcentro[0]=$centrodata;
	
	return $arrcentro;
}

function searchNomProf($rut)
{
	$arrnom = array();
	$query="select NombreProfGuiaCP from profesorguiacp where RutProfGuiaCP = '".$rut."';";
	$nomdata=Yii::app()->db->createCommand($query)->queryScalar();
    $arrnom[0]=$nomdata;
	
	return $arrnom;
}
