<div class="row">
		<?php echo $form->labelEx($secretariaModel,'RutSecretaria'); ?>
		<?php echo $form->textField($secretariaModel,'RutSecretaria',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($secretariaModel,'RutSecretaria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($secretariaModel,'NombreSecretaria'); ?>
		<?php echo $form->textField($secretariaModel,'NombreSecretaria',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($secretariaModel,'NombreSecretaria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($secretariaModel,'MailSecretaria'); ?>
		<?php echo $form->textField($secretariaModel,'MailSecretaria',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($secretariaModel,'MailSecretaria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($secretariaModel,'TelefonoSecretaria'); ?>
		<?php echo $form->textField($secretariaModel,'TelefonoSecretaria',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($secretariaModel,'TelefonoSecretaria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($secretariaModel,'CelularSecretaria'); ?>
		<?php echo $form->textField($secretariaModel,'CelularSecretaria',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($secretariaModel,'CelularSecretaria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($secretariaModel,'ImagenSecretaria'); ?>
		<?php echo CHtml::activeFileField($secretariaModel,'ImagenSecretaria');?>
		<?php echo $form->error($secretariaModel,'ImagenSecretaria'); ?>
	</div>