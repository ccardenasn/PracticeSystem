<div class="row">
		<?php echo $form->labelEx($jefeutpModel,'RutJefeUTPCP'); ?>
		<?php echo $form->textField($jefeutpModel,'RutJefeUTPCP',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($jefeutpModel,'RutJefeUTPCP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($jefeutpModel,'NombreJefeUTPCP'); ?>
		<?php echo $form->textField($jefeutpModel,'NombreJefeUTPCP',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($jefeutpModel,'NombreJefeUTPCP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($jefeutpModel,'MailJefeUTPCP'); ?>
		<?php echo $form->textField($jefeutpModel,'MailJefeUTPCP',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($jefeutpModel,'MailJefeUTPCP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($jefeutpModel,'TelefonoJefeUTPCP'); ?>
		<?php echo $form->textField($jefeutpModel,'TelefonoJefeUTPCP',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($jefeutpModel,'TelefonoJefeUTPCP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($jefeutpModel,'CelularJefeUTPCP'); ?>
		<?php echo $form->textField($jefeutpModel,'CelularJefeUTPCP',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($jefeutpModel,'CelularJefeUTPCP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($jefeutpModel,'ImagenJefeUTPCP'); ?>
		<?php echo CHtml::activeFileField($jefeutpModel,'ImagenJefeUTPCP');?>
		<?php echo $form->error($jefeutpModel,'ImagenJefeUTPCP'); ?>
	</div>