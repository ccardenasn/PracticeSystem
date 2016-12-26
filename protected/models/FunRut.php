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




?>