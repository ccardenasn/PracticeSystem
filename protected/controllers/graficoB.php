<?php

function loadGraphB($centropractica)
{   
    $querycontainsA="select count(*) from estudiante where ConfiguracionPractica_NombrePractica = 'Practica Pre Profesional' and CentroPractica_RBD = '".$centropractica."';";
    $execcontainsA=Yii::app()->db->createCommand($querycontainsA)->queryScalar();
    $containsA=intval($execcontainsA);
    
    $querycontainsB="select count(*) from estudiante where ConfiguracionPractica_NombrePractica = 'Practica Profesional' and CentroPractica_RBD = '".$centropractica."';";
    $execcontainsB=Yii::app()->db->createCommand($querycontainsB)->queryScalar();
    $containsB=intval($execcontainsB);
    
    $querycontainsC="select count(*) from estudiante where ConfiguracionPractica_NombrePractica = 'Practica de Observacion Participante' and CentroPractica_RBD = '".$centropractica."';";
    $execcontainsC=Yii::app()->db->createCommand($querycontainsC)->queryScalar();
    $containsC=intval($execcontainsC);
    
    
    $resultarray = array();
    $i=0;
    if($containsA > 0)
    {
        $resultarray[$i]=$containsA;
        $i=$i+1;
    }
    
    if($containsB > 0)
    {
        $resultarray[$i]=$containsB;
        $i=$i+1;
    }
    
    if($containsC > 0)
    {
        $resultarray[$i]=$containsC;
    }
    
    return $resultarray;
}

function listDataB($resultarray)
{
    $graphdata=array();
    
    $graphdata[0]=array('Practica Pre Profesional',$resultarray[0]);
    $graphdata[1]=array('Practica Pre Profesional',$resultarray[1]);
    
    return $graphdata;
}

function graphOptionsB($graphdata)
{
    //options items
        $colors=array('#FFD148', '#0563FE', '#FF2F2F', '#000000');
        $gradient=array('enabled'=> true);
        $credits=array('enabled' => false);
        
        $chart=array('plotBackgroundColor' => '#ffffff',
                     'plotBorderWidth' => null,
                     'plotShadow' => false,
                     'height' => 400,);
        
        $jsfunction='js:function() { return this.point.name+": <b>"+Math.round(this.point.percentage)+"</b>%"; }';
        
        $tooltip=array('formatter'=> $jsfunction,);
        
        
        $dataLabels=array('enabled' => true,'color' => '#AAAAAA','connectorColor' => '#AAAAAA',);
        
        $pie=array('allowPointSelect'=>true,
                   'cursor' => 'pointer',
                   'dataLabels' => $dataLabels,
                   'showInLegend'=>true,);
        
        $plotoptions=array('pie' => $pie);
        
        
        //$graphdata=array(
            //array($rows[0]['NombreCentroPractica'],$param[0]),
            //array($rows[1]['NombreCentroPractica'],$param[1]),
            //array($rows[2]['NombreCentroPractica'],$param[2]),
            //array($rows[3]['NombreCentroPractica'],$param[3]),
        //);
        
        $properties=array(
          'type' => 'pie',
          'name' => 'Percentage',
          'data' => $graphdata,
        );
        
        $mainoptions=array(
            'colors'=>$colors,
            'gradient' => $gradient,
            'credits' => $credits,
            'chart' => $chart,
            'title' => false,
            'tooltip' => $tooltip,
            'plotOptions' => $plotoptions,
            'series' => array($properties,),
        );
    
    return $mainoptions;
}