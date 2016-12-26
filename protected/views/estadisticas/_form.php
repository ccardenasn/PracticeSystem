<?php
include_once('graficar.php');
//include_once('graficoB.php');
/* @var $this EstadisticasController */
/* @var $model Estadisticas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'estadisticas-form',
	'method'=>'post',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	'clientOptions'=>array('validateOnSubmit'=>true,),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'RBD'); ?>
		<?php echo $form->textField($model,'RBD'); ?>
		<?php echo $form->error($model,'RBD'); ?>
	</div>
    
    <div class="row">
		<?php echo $form->labelEx($model,'NombreCentroPractica'); ?>
		<?php echo $form->dropDownList($model,'NombreCentroPractica',CHtml::listData(Centropractica::model()->findAll(),'RBD','NombreCentroPractica','RBD'));?>
        <?php echo $form->error($model,'NombreCentroPractica'); ?>
	</div>
	
	<html>
<head>
<script src="graficoestudiantes/jquery.min.js"></script>
<script src="graficoestudiantes/yii-highcharts/highcharts/assets/highcharts.js"></script>
<script src="graficoestudiantes/yii-highcharts/highcharts/assets/modules/exporting.js"></script>
	
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
	include('/graficoestudiantes/connect.php');
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
    
    <div class="row">
	    <?php
        
        
        
        //$maindataA=loadGraphB('7701');
        
        //print_r($model->NombreCentroPractica);
        
        //$graphdataA=listDataB($maindataA);
        
        //$mainoptionsA=graphOptionsB($graphdataA);
        
        //$this->widget('ext.yii-highcharts.highcharts.HighchartsWidget',array('options'=>$mainoptionsA,));
    
        ?>
    </div>
    
    <div class="row">
	    <?php
        
        $maindata=loadGraph();
        
        $graphdata=listData($maindata[0],$maindata[1],$maindata[2]);
        
        $mainoptions=graphOptions($graphdata);
        
        $this->Widget('ext.yii-highcharts.highcharts.HighchartsWidget',array('options'=>$mainoptions));
    
        ?>
        
    </div>
        
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->