<html>
<head>
<?php Yii::app()->clientScript->registerCoreScript('jquery');?>
<script src='<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js'></script>
<script src='<?php echo Yii::app()->request->baseUrl; ?>/js/yii-highcharts/highcharts/assets/highcharts.js'></script>
<script src='<?php echo Yii::app()->request->baseUrl; ?>/js/yii-highcharts/highcharts/assets/modules/exporting.js'></script>
	
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
		$.getJSON('data.php', {id: id}, function(chartData) {
			$('#container').highcharts({
				chart: {
					type: 'pie'
				},
				title: {
					text: 'Cantidad de Estudiantes en Practica Por Centro'
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

	$(document).ready(function() {
            $("#dynamic_data").change(function() {
                $.ajax({
                    type: "GET",
                    url: "getservice.php",
                    data: "id=" + $(this).find(":selected").val(),
                    cache: true,

                    success: function(rslt){

                        $('#tabla').html(rslt);
                    }
                });
            });
            $("#tabla").trigger('change');
        });
	
	
</script>
	
</head>
<body>
<select id="dynamic_data">
	<option value="0" selected>Select Data</option>
	<?php 
	include('connect.php');
	while($rows = mysql_fetch_array($stmt))
	{
		echo'<option value="'.$rows['RBD'].'">'.$rows['NombreCentroPractica'].'</option>';
	}
	?>
</select>
<div id="container" style="width: 50%;min-width: 310px; height: 400px; margin: 0 auto"></div>
	<div id="tabla" style="width: 50%;min-width: 310px; height: 400px; margin: 0 auto"></div>
</body>
</html>