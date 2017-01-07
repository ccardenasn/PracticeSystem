<?php

function loadGraph()
{   
    $querylist="select RBD,NombreCentroPractica from centropractica;";
    $execcommand = Yii::app()->db->createCommand($querylist);
    $rows = $execcommand->queryAll();
    
    $querytotal="select count(*) from centropractica;";
    $execquerytotal=Yii::app()->db->createCommand($querytotal)->queryScalar();
    $total=intval($execquerytotal);
    
    $start=true;
    $i=0;
    
    $param=array();
    
    while($start==true){
        $id=$rows[$i]['RBD'];
        
        $query="select count(*) from profesorguiacp where CentroPractica_RBD = '".$id."';";
        $execquery=Yii::app()->db->createCommand($query)->queryScalar();
        $result=intval($execquery);
        
        $param[$i]=$result;
        
        $i=$i+1;
        if($i==$total){
            $start=false;
        }   
    }
    
    $resultarray = array($rows,$param,$total);
    
    return $resultarray;
}

function listData($rows,$param,$total)
{
    $graphdata=array();
    
    for($l=0;$l<$total;$l++){
        $graphdata[$l]=array($rows[$l]['NombreCentroPractica'],$param[$l]);
    }
    
    return $graphdata;
}

function graphOptions($graphdata)
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