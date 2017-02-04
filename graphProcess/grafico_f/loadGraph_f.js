$(function () {
 
		//on page load  
		getAjaxData(1);
 
		//on changing select option
		$('#dynamic_data').change(function(){
			var val = $('#dynamic_data').val();
			getAjaxData(val);
		});
 
		function getAjaxData(id){

		//use getJSON to get the dynamic data via AJAX call
		$.getJSON('graphProcess/grafico_f/data.php', {id: id}, function(chartData) {
			
			$('.maintable').empty();
				$('.maintable').append('<tr bgcolor="#C9E0ED"><th><h3>Centro de Práctica</h2></th><th><h2>Número de Profesores</h3></th></tr>');
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