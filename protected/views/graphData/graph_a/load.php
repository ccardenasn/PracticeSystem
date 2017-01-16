<?php

$base = Yii::app()->baseUrl; 
$js = Yii::app()->getClientScript();
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
		$.getJSON('graphProcess/grafico_a/data.php', {id: id}, function(chartData) {
			
				$('.maintable').empty();
				$('.maintable').append('<tr bgcolor="#C9E0ED"><th><h3>Nombre de Práctica</h2></th><th><h2>Número de Estudiantes</h3></th></tr>');
                var tr = chartData.data
				
                for (var i = 0; i < chartData[0].data.length; i++) {
                    tr = $('<tr/>');
                    tr.append("<td><h4>" + chartData[0].data[i][0] + "</h4></td>");
					tr.append("<td><h4>" + chartData[0].data[i][1] + "</h4></td>");
                    $('.maintable').append(tr);
                }
			
			$('#graphcontainer').highcharts({
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
?>

<div class="row">
<?php echo CHtml::label('<b>Seleccione Un Centro</b>','centerLabel');?>
</div>

<div class="row">
<?php echo CHtml::dropDownList('dynamic_data','RBD',$data,array('id'=>'dynamic_data'));?>
</div>

<div id="graphcontainer" style="width: 90%; float:left;"></div>

<table class="maintable" bgcolor="#F0F0F0">
</table>