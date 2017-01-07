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
                        'url' => CController::createUrl('estadisticas/UpdateAjax'),
                        'data'=> array('RBD'=>'js: $(this).val()'),  
                        'update'=>'#data',
 
                       )
  )
									  
									  
									  );?>
        <?php echo $form->error($model,'NombreCentroPractica'); ?>
	</div>
	
	<div id="data">
   <?php $this->renderPartial('_ajaxContent', array('myValue'=>$myValue)); ?>
</div>
 
<?php //echo CHtml::ajaxButton ("Update data",
        //                      CController::createUrl('helloWorld/UpdateAjax'), 
          //                    array('update' => '#data'));
?>


<?php
	
	$listVeh = array('corvette','lamborghini','ferrari');
	
?>
	


        
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->