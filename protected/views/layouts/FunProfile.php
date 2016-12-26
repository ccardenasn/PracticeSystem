<?php

function findProfileURL($rut)
    {
        $querya = Yii::app()->db->createCommand("select count(*) from estudiante where RutEstudiante = '".$rut."'")->queryScalar();
                
        $queryb = Yii::app()->db->createCommand("select count(*) from directorcarrera where RutDirector = '".$rut."'")->queryScalar();
                
        $queryc = Yii::app()->db->createCommand("select count(*) from docentecoordinadorpracticas where RutCoordinador = '".$rut."'")->queryScalar();
                
        $queryd = Yii::app()->db->createCommand("select count(*) from docenteresponsablepractica where RutResponsable = '".$rut."'")->queryScalar();
        
        $profileURL='';
        
        if($querya == 1){
            $profileURL='perfilestudiante/view&id='.$rut.'';
        }else{
            if($queryb == 1){
                $profileURL='perfildirectorcarrera/view&id='.$rut.'';
            }else{
                if($queryc == 1){
                    $profileURL='perfildocentecoordinadorpracticas/view&id='.$rut.'';
                }else{
                    if($queryd == 1){
                        $profileURL='perfildocenteresponsablepractica/view&id='.$rut.'';
                    }
                }
            }
        }
        
        return $profileURL;
    }