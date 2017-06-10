<?php

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

/*function containsBitacora($planificacion){
	$query="select count(*) from bitacorasesion where PlanificacionClase_CodPlanificacion = '".$planificacion."';";
	$result=Yii::app()->db->createCommand($query)->queryScalar();
	
	return $result;
}*/
