<div class="row">
		<?php echo $form->labelEx($directorModel,'RutDirectorCP'); ?>
		<?php echo $form->textField($directorModel,'RutDirectorCP',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($directorModel,'RutDirectorCP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($directorModel,'NombreDirectorCP'); ?>
		<?php echo $form->textField($directorModel,'NombreDirectorCP',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($directorModel,'NombreDirectorCP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($directorModel,'MailDirectorCP'); ?>
		<?php echo $form->textField($directorModel,'MailDirectorCP',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($directorModel,'MailDirectorCP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($directorModel,'TelefonoDirectorCP'); ?>
		<?php echo $form->textField($directorModel,'TelefonoDirectorCP',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($directorModel,'TelefonoDirectorCP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($directorModel,'CelularDirectorCP'); ?>
		<?php echo $form->textField($directorModel,'CelularDirectorCP',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($directorModel,'CelularDirectorCP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($directorModel,'ImagenDirectorCP'); ?>
		<?php echo CHtml::activeFileField($directorModel,'ImagenDirectorCP');?>
		<?php echo $form->error($directorModel,'ImagenDirectorCP'); ?>
	</div>