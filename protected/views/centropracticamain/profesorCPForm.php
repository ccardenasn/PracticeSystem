<div class="row">
    <?php echo $form->labelEx($profesorModel,'RutProfGuiaCP'); ?>
    <?php echo $form->textField($profesorModel,'RutProfGuiaCP',array('size'=>45,'maxlength'=>45)); ?>
    <?php echo $form->error($profesorModel,'RutProfGuiaCP'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($profesorModel,'NombreProfGuiaCP'); ?>
    <?php echo $form->textField($profesorModel,'NombreProfGuiaCP',array('size'=>45,'maxlength'=>45)); ?>
    <?php echo $form->error($profesorModel,'NombreProfGuiaCP'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($profesorModel,'CursoProfGuiaCP'); ?>
    <?php echo $form->textField($profesorModel,'CursoProfGuiaCP',array('size'=>45,'maxlength'=>45)); ?>
    <?php echo $form->error($profesorModel,'CursoProfGuiaCP'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($profesorModel,'ProfesorJefeProfGuiaCP'); ?>
    <?php echo $form->textField($profesorModel,'ProfesorJefeProfGuiaCP',array('size'=>45,'maxlength'=>45)); ?>
    <?php echo $form->error($profesorModel,'ProfesorJefeProfGuiaCP'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($profesorModel,'MailProfGuiaCP'); ?>
    <?php echo $form->textField($profesorModel,'MailProfGuiaCP',array('size'=>45,'maxlength'=>45)); ?>
    <?php echo $form->error($profesorModel,'MailProfGuiaCP'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($profesorModel,'TelefonoProfGuiaCP'); ?>
    <?php echo $form->textField($profesorModel,'TelefonoProfGuiaCP',array('size'=>45,'maxlength'=>45)); ?>
    <?php echo $form->error($profesorModel,'TelefonoProfGuiaCP'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($profesorModel,'CelularProfGuiaCP'); ?>
    <?php echo $form->textField($profesorModel,'CelularProfGuiaCP',array('size'=>45,'maxlength'=>45)); ?>
    <?php echo $form->error($profesorModel,'CelularProfGuiaCP'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($profesorModel,'ImagenProfGuiaCP'); ?>
    <?php echo CHtml::activeFileField($profesorModel,'ImagenProfGuiaCP');?>
    <?php echo $form->error($profesorModel,'ImagenProfGuiaCP'); ?>
</div>