<div class="row">
    <?php echo $form->labelEx($carreraModel,'codCarrera'); ?>
    <?php echo $form->textField($carreraModel,'codCarrera',array('size'=>45,'maxlength'=>45)); ?>
    <?php echo $form->error($carreraModel,'codCarrera'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($carreraModel,'NombreCarrera'); ?>
    <?php echo $form->textField($carreraModel,'NombreCarrera',array('size'=>45,'maxlength'=>45)); ?>
    <?php echo $form->error($carreraModel,'NombreCarrera'); ?>
</div>

<div class="row">
    <?php //echo $form->labelEx($carreraModel,'SemestresCarrera'); ?>
    <?php echo $form->hiddenField($carreraModel,'SemestresCarrera',array('readOnly'=>true,'size'=>45,'maxlength'=>45)); ?>
    <?php echo $form->error($carreraModel,'SemestresCarrera'); ?>
</div>

<div class="row">
    <?php echo CHtml::label('Número de Semestres','SemestresCarrera'); ?>
    <?php echo CHtml::textField('SemestresCarrera',$carreraModel->SemestresCarrera,array('readOnly' => true,'disabled'=>'disabled','size'=>45,'maxlength'=>45)); ?>
</div>