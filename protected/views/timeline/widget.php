<?php 
print_r($myValue);
/*$this->Widget('ext.yii-highcharts.highcharts.HighchartsWidget', array(

   'options'=>array(

       'credits' => array('enabled' => false),
      'title' => array('text' => 'chuchu'),
      'xAxis' => array(
         'categories' => array('Apples', 'Bananas', 'Oranges')
      ),

      'yAxis' => array(
         'title' => array('text' => 'Fruit eaten')
      ),
      'series' => array(
         array('name' => 'Jane', 'data' => array($myValue, 6, 7)),
         array('name' => 'John', 'data' => array(5, 7, 3))
      )   )));*/

Yii::app()->clientScript->registerCoreScript('jquery');
	$baseUrl = Yii::app()->baseUrl; 
$cs = Yii::app()->getClientScript();
	$cs->registerScriptFile($baseUrl.'/js/jquery.min.js');
$cs->registerScriptFile($baseUrl.'/js/yii-highcharts/highcharts/assets/highcharts.js');
	
	$cs->registerScriptFile($baseUrl.'/js/yii-highcharts/highcharts/assets/modules/exporting.js');
?>


<script>
$(function () { 
    $('#ep').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Fruit Consumption'
        },
        xAxis: {
            categories: ['Apples', 'Bananas', 'Oranges']
        },
        yAxis: {
            title: {
                text: 'Fruit eaten'
            }
        },
        series: [{
            name: 'Jane',
            data: [1, 0, 4]
        }, {
            name: 'John',
            data: [5, 7, 3]
        }]
    });
});
	</script>

<div id="container" style="width: 50%;min-width: 310px; height: 400px; margin: 0 auto"></div>
<div id="ep" style="width: 50%;min-width: 310px; height: 400px; margin: 0 auto"></div>