<?php

function rutvalido($rut){
    $esRut=false;
    $numero = substr($rut,0,strlen($rut)-2);

    $start=true;
    $serie=2;

    $result=0;

    $len=strlen($numero)-1;

    while($start==true){
    
        $digitostr=substr($numero,$len,1);
    
        $digitoint=(int)$digitostr;
    
        $valorserie=$digitoint*$serie;
    
        $result=$result+$valorserie;
    
        $len=$len-1;
    
        $serie=$serie+1;
    
        if($serie > 7){
            $serie=2;
        }
    
        if($len < 0){
            $start=false;
        }
    }

    $modulo=$result%11;

    $digitoresto=11-$modulo;

    $digitover=substr($rut,strlen($rut)-1,1);

    if($digitoresto == $digitover){
        $esRut=true;
    }else{
        if($digitoresto == 11){
            if($digitover == '0'){
                $esRut=true;
            }
        }else{
            if($digitoresto == 10){
                if($digitover == 'k'){
                    $esRut=true;
                }
            }
        }
    }
    
    return $esRut;
}

function uniquerut($rut){
    $exist = false;
    
    $studentModel = Estudiante::model()->find('RutEstudiante=?',array($rut));
    $directorModel = Directorcarrera::model()->find('RutDirector=?',array($rut));
    $coordinadorModel = Docentecoordinadorpracticas::model()->find('RutCoordinador=?',array($rut));
    $responsableModel = Docenteresponsablepractica::model()->find('RutResponsable=?',array($rut));
    $secretariaModel = Secretariacarrera::model()->find('RutSecretaria=?',array($rut));
    $secretariacpModel = Secretariacp::model()->find('RutSecretariaCP=?',array($rut));
    $directorcpModel = Directorcp::model()->find('RutDirectorCP=?',array($rut));
    $jefetutpcpModel = Jefeutpcp::model()->find('RutJefeUTPCP=?',array($rut));
    $profesorcoordinadorcpModel = Profesorcoordinadorpracticacp::model()->find('RutProfCoordGuiaCp=?',array($rut));
    $profesorguiacpModel = Profesorguiacp::model()->find('RutProfGuiaCP=?',array($rut));
    
    if($studentModel != null || $directorModel != null || $coordinadorModel != null || $responsableModel != null || $secretariaModel != null || $secretariacpModel != null || $directorcpModel != null || $jefetutpcpModel != null || $profesorcoordinadorcpModel != null || $profesorguiacpModel != null){
        $exist = true;
    }else{
        $exist = false;
    }
    
    return $exist;
}

function uniquerutresp($rut){
    $exist = false;
    
    $studentModel = Estudiante::model()->find('RutEstudiante=?',array($rut));
    $directorModel = Directorcarrera::model()->find('RutDirector=?',array($rut));
    $responsableModel = Docenteresponsablepractica::model()->find('RutResponsable=?',array($rut));
    $secretariaModel = Secretariacarrera::model()->find('RutSecretaria=?',array($rut));
    $secretariacpModel = Secretariacp::model()->find('RutSecretariaCP=?',array($rut));
    $directorcpModel = Directorcp::model()->find('RutDirectorCP=?',array($rut));
    $jefetutpcpModel = Jefeutpcp::model()->find('RutJefeUTPCP=?',array($rut));
    $profesorcoordinadorcpModel = Profesorcoordinadorpracticacp::model()->find('RutProfCoordGuiaCp=?',array($rut));
    $profesorguiacpModel = Profesorguiacp::model()->find('RutProfGuiaCP=?',array($rut));
    
    if($studentModel != null || $directorModel != null || $responsableModel != null || $secretariaModel != null || $secretariacpModel != null || $directorcpModel != null || $jefetutpcpModel != null || $profesorcoordinadorcpModel != null || $profesorguiacpModel != null){
        $exist = true;
    }else{
        $exist = false;
    }
    
    return $exist;
}

function uniquerutupdate($rut){
    $exist = false;
    
    $studentModel = Estudiante::model()->find('RutEstudiante=?',array($rut));
    $directorModel = Directorcarrera::model()->find('RutDirector=?',array($rut));
    $coordinadorModel = Docentecoordinadorpracticas::model()->find('RutCoordinador=?',array($rut));
    $responsableModel = Docenteresponsablepractica::model()->find('RutResponsable=?',array($rut));
    $secretariaModel = Secretariacarrera::model()->find('RutSecretaria=?',array($rut));
    $secretariacpModel = Secretariacp::model()->find('RutSecretariaCP=?',array($rut));
    $directorcpModel = Directorcp::model()->find('RutDirectorCP=?',array($rut));
    $jefetutpcpModel = Jefeutpcp::model()->find('RutJefeUTPCP=?',array($rut));
    $profesorcoordinadorcpModel = Profesorcoordinadorpracticacp::model()->find('RutProfCoordGuiaCp=?',array($rut));
    $profesorguiacpModel = Profesorguiacp::model()->find('RutProfGuiaCP=?',array($rut));
    
    
    
    
    if($studentModel != null || $directorModel != null || $coordinadorModel != null || $responsableModel != null || $secretariaModel != null || $secretariacpModel != null || $directorcpModel != null || $jefetutpcpModel != null || $profesorcoordinadorcpModel != null || $profesorguiacpModel != null){
           $exist = true; 
        
    }else{
        $exist = false;
    }
    
    return $exist;
}




?>