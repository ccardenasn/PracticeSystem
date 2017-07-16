<?php
/* @var $this ConfiguracionpracticaController */
/* @var $model Configuracionpractica */
/* @var $form CActiveForm */
?>

<script>
    var dataListBox = Array();
    
    function deleteData(arr,value){
        var newArr = Array();
        for(i=0;i<arr.length;i++){
            if(arr[i] != value){
                newArr.push(arr[i]);
            }
        }
        return newArr;
    }
    
    function containsData(arr,value){
        var exist = false;
        for(i=0;i<arr.length;i++){
            var dataArr = arr[i];
            if(dataArr == value){
                exist = true;
            }
        }
        
        return exist;
    }
    
    function myFunction(val){
        
        var exist = containsData(dataListBox,val);
        
        if(exist == false){
            dataListBox.push(val);
        }else{
            dataListBox=deleteData(dataListBox,val);
        }
        
        $('select#Configuracionpractica_docenteresponsablepracticas').val(dataListBox);
    } 
</script>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'configuracionpractica-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model,'<strong>El formulario contiene los siguientes errores:</strong>'); ?>

	<?php if(Yii::app()->user->hasFlash('message')):?>
    <div class="row buttons">
        <?php echo Yii::app()->user->getFlash('message'); ?>
    </div>
    <?php endif; ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'NombrePractica'); ?>
		<?php echo $form->textField($model,'NombrePractica',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'NombrePractica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DescripcionPractica'); ?>
		<?php echo $form->textArea($model,'DescripcionPractica',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'DescripcionPractica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FechaPractica'); ?>
		<?php echo $form->textField($model,'FechaPractica',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'FechaPractica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Semestre_CodSemestre'); ?>
		<?php echo $form->dropDownList($model,'Semestre_CodSemestre',CHtml::listData(Semestre::model()->findAll(),'CodSemestre','NombreSemestre'));?>
        <?php echo $form->error($model,'Semestre_CodSemestre'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'NumeroSesionesPractica'); ?>
		<?php echo $form->textField($model,'NumeroSesionesPractica',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'NumeroSesionesPractica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NumeroHorasPractica'); ?>
		<?php echo $form->textField($model,'NumeroHorasPractica',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'NumeroHorasPractica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Docente Coordinador de Prácticas'); ?>
		<?php echo $form->dropDownList($model,'DocenteCoordinadorPracticas_RutCoordinador',CHtml::listData(Docentecoordinadorpracticas::model()->findAll(),'RutCoordinador','NombreCoordinador','RutCoordinador'));?>
        <?php echo $form->error($model,'DocenteCoordinadorPracticas_RutCoordinador'); ?>
	</div>
    
    <div class="row">
		<?php echo $form->labelEx($model,'docenteresponsablepracticas'); ?>
		<?php echo $form->listBox($model,'docenteresponsablepracticas',Docenteresponsablepractica::getListResponsables(), array('multiple' => 'multiple','onclick'=>"myFunction(this.value)")); ?>
		<?php echo $form->error($model,'docenteresponsablepracticas'); ?>
	</div>
    
    <!--<div class="row">
		<?php //echo $form->labelEx($model,'docenteresponsablepracticas'); ?>
		<?php //echo $form->checkBoxList($model,'docenteresponsablepracticas',Docenteresponsablepractica::getListResponsables()); ?>
		<?php //echo $form->error($model,'docenteresponsablepracticas'); ?>
	</div>-->
    
    

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'Docente Responsable de Práctica'); ?>
		<?php //echo $form->dropDownList($model,'DocenteResponsablePractica_RutResponsable',CHtml::listData(Docenteresponsablepractica::model()->findAll(),'RutResponsable','NombreResponsable','RutResponsable'));?>
        <?php //echo $form->error($model,'DocenteResponsablePractica_RutResponsable'); ?>
	</div>-->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar Cambios'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->