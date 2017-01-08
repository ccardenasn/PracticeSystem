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

	<?php
	
	Yii::app()->clientScript->registerCoreScript('jquery');
	$baseUrl = Yii::app()->baseUrl; 
$cs = Yii::app()->getClientScript();
	$cs->registerScriptFile($baseUrl.'/js/jquery.min.js');
$cs->registerScriptFile($baseUrl.'/js/yii-highcharts/highcharts/assets/highcharts.js');
	
	$cs->registerScriptFile($baseUrl.'/js/yii-highcharts/highcharts/assets/modules/exporting.js');

	Yii::app()->clientScript->registerScript("view-script","
$(function () { 
    $('#view_script').highcharts({
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
});");
	
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
		$.getJSON('<?php CController::createUrl('estadisticas/updateAjax') ?>', {id: id}, function(chartData) {
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
	
	
</script>

	<div id="container" style="width: 50%;min-width: 310px; height: 400px; margin: 0 auto"></div>
	<div id="view-script" style="width: 50%;min-width: 310px; height: 400px; margin: 0 auto"></div>
	<div class="row">
		<?php echo $form->labelEx($model,'RBD'); ?>
		<?php echo $form->textField($model,'RBD'); ?>
		<?php echo $form->error($model,'RBD'); ?>
	</div>
	
	<?php
	
	$listveh=CHtml::listData(Centropractica::model()->findAll(),'RBD','NombreCentroPractica','RBD');
	?>
	
    
    <div class="row">
		<?php echo $form->labelEx($model,'NombreCentroPractica'); ?>
		<?php echo $form->dropDownList($model,'NombreCentroPractica',$listveh,
								   array(
        'empty'=> 'Select Vehicle',
        'ajax' => array(
                        'type' => 'POST', 
                        'url' => CController::createUrl('estadisticas/updateAjax'),
                        'data'=> array('RBD'=>'js: $(this).val()'),  
                        'update'=>'#container',
 
                       )
  )
									  
									  
									  );?>
        <?php echo $form->error($model,'NombreCentroPractica'); ?>
	</div>
	
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
	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->