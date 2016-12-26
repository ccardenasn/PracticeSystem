<?php
/* @var $this CustomerController */
/* @var $model Customer */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('DynamicTabularForm', array(
	'id'=>'customer-form',
	'defaultRowView'=>'_contact_form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<br/>
	<h2>Contact Person</h2>
	<div class="row clearfix">
		<div class="span-6">Name</div>
		<div class="span-5">Email</div>
		<div class="span-5">Phone</div>
		<div class="span-1"></div>
	</div>

	<div id="tabular-content">
		<?php echo $form->rowForm($contacts) ?>
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->