<div class="row">
    <?php echo $form->labelEx($coordinadorModel,'RutProfCoordGuiaCp'); ?>
    <?php echo $form->textField($coordinadorModel,'RutProfCoordGuiaCp',array('size'=>45,'maxlength'=>45)); ?>
    <?php echo $form->error($coordinadorModel,'RutProfCoordGuiaCp'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($coordinadorModel,'NombreProfCoordGuiaCP'); ?>
    <?php echo $form->textField($coordinadorModel,'NombreProfCoordGuiaCP',array('size'=>45,'maxlength'=>45)); ?>
    <?php echo $form->error($coordinadorModel,'NombreProfCoordGuiaCP'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($coordinadorModel,'MailProfCoordGuiaCP'); ?>
    <?php echo $form->textField($coordinadorModel,'MailProfCoordGuiaCP',array('size'=>45,'maxlength'=>45)); ?>
    <?php echo $form->error($coordinadorModel,'MailProfCoordGuiaCP'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($coordinadorModel,'TelefonoProfCoordGuiaCP'); ?>
    <?php echo $form->textField($coordinadorModel,'TelefonoProfCoordGuiaCP',array('size'=>45,'maxlength'=>45)); ?>
    <?php echo $form->error($coordinadorModel,'TelefonoProfCoordGuiaCP'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($coordinadorModel,'CelularProfCoordGuiaCP'); ?>
    <?php echo $form->textField($coordinadorModel,'CelularProfCoordGuiaCP',array('size'=>45,'maxlength'=>45)); ?>
    <?php echo $form->error($coordinadorModel,'CelularProfCoordGuiaCP'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($coordinadorModel,'ImagenProfCoordGuiaCP'); ?>
    <?php echo CHtml::activeFileField($coordinadorModel,'ImagenProfCoordGuiaCP');?>
    <?php echo $form->error($coordinadorModel,'ImagenProfCoordGuiaCP'); ?>
</div>