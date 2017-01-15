<?php

$base = Yii::app()->baseUrl; 
$js = Yii::app()->getClientScript();
//$js->registerScriptFile($base.'/js/jquery.min.js');
$js->registerScriptFile($base.'/js/yii-highcharts/highcharts/assets/highcharts.js');
$js->registerScriptFile($base.'/js/yii-highcharts/highcharts/assets/modules/exporting.js');



?>
	
<script>
$(function () {
		//on page load  
		getAjaxData(7701);
 
		//on changing select option
		$('#dynamic_data').change(function(){
			var val = $('#dynamic_data').val();
			getAjaxData(val);
		});
 
		function getAjaxData(id){

		//use getJSON to get the dynamic data via AJAX call
		$.getJSON('chartsformchange/data.php', {id: id}, function(chartData) {
			
				$('.table1').empty();
                var tr = chartData.data
                for (var i = 0; i < chartData[0].data.length; i++) {
                    tr = $('<tr/>');
                    tr.append("<td>" + chartData[0].data[i][0] + "</td>");
					tr.append("<td>" + chartData[0].data[i][1] + "</td>");
                    $('.table1').append(tr);
                }
            
			
			
			
			$('#container').highcharts({
				chart: {
					type: 'pie'
				},
				title: {
					text: ''
				},
				tooltip: { 
					formatter: function() {
        				return '<b>'+ this.point.name +'</b>: '+ Math.round(this.percentage) +' %';
     				}
				},
				credits: {
					enabled: false
				},
				xAxis: {
					categories: ['Uno','Do']
				},
				yAxis: {
					min: 0,
					title: {
						text: 'Value'
					}
				},
				plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    borderWidth: 1,
                    borderColor: 'red',
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
				series: chartData
			});
		});
	}
});
</script>

<?php
	
$data=CHtml::listData(Centropractica::model()->findAll(),'RBD','NombreCentroPractica','RBD');

//$data = CHtml::listData(Status::model()->findAll('IsProcess=?',array(1)), 'ID', 'Description');
 
$select = key($data);
	
?>


<?php echo CHtml::dropDownList('dynamic_data',$select,$data,array('id'=>'dynamic_data',));
?>

<div id="container" style="width: 90%; float:left;"></div>

 

    <table class="table1">
        <tr>
            <th>Nombre de Practica</th>
            <th>Numero de Estudiantes</th>
        </tr>
    </table>


