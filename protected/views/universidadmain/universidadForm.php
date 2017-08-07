<div class="row">
    <?php echo $form->labelEx($universidadModel,'NombreInstitucion'); ?>
    <?php echo $form->textField($universidadModel,'NombreInstitucion',array('size'=>45,'maxlength'=>45)); ?>
    <?php echo $form->error($universidadModel,'NombreInstitucion'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($universidadModel,'Sede'); ?>
    <?php echo $form->textField($universidadModel,'Sede',array('size'=>45,'maxlength'=>45)); ?>
    <?php echo $form->error($universidadModel,'Sede'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($universidadModel,'Campus'); ?>
    <?php echo $form->textField($universidadModel,'Campus',array('size'=>45,'maxlength'=>45)); ?>
    <?php echo $form->error($universidadModel,'Campus'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($universidadModel,'Facultad'); ?>
    <?php echo $form->textField($universidadModel,'Facultad',array('size'=>45,'maxlength'=>45)); ?>
    <?php echo $form->error($universidadModel,'Facultad'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($universidadModel,'Region_codRegion'); ?>
    <?php echo $form->dropDownList($universidadModel,'Region_codRegion',CHtml::listData(Region::model()->findAll(),'codRegion','NombreRegion'),
                                   array(
                                       'ajax'=>array(
                                           'type'=>'POST',
                                           'url'=>CController::createUrl('Universidadmain/selectProvincia'),
                                           'update'=>'#'.CHtml::activeId($universidadModel,'Provincia_codProvincia'),
                                           'beforeSend'=>'function(){$("#Universidad_Provincia_codProvincia").find("option").remove();$("#Universidad_Ciudad_codCiudad").find("option").remove();}',),
                                       'prompt'=>'Seleccione'));?>
    <?php echo $form->error($universidadModel,'Region_codRegion'); ?>
</div>

<?php //campo dropdownlist Provincia?>
<div class="row">
    <?php echo $form->labelEx($universidadModel,'Provincia_codProvincia'); ?>
    <?php 
    $lista_dos=array();
    if(isset($universidadModel->Provincia_codProvincia)){
        $id_uno=intval($universidadModel->Region_codRegion);
        $lista_dos = CHtml::listData(Provincia::model()->findAll("Region_codRegion = '$id_uno'"),'codProvincia','NombreProvincia');
    }
    
    echo $form->dropDownList($universidadModel,'Provincia_codProvincia',$lista_dos,
                             array(
                                 'ajax'=>array(
                                     'type'=>'POST',
                                     'url'=>CController::createUrl('Universidadmain/selectCiudad'),
                                     'update'=>'#'.CHtml::activeId($universidadModel,'Ciudad_codCiudad'),
                                     'beforeSend'=>'function(){
                                     $("#Universidad_Ciudad_codCiudad").find("option").remove();}',
                                 ),
                                 'prompt'=>'Seleccione'));?>
    <?php echo $form->error($universidadModel,'Provincia_codProvincia'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($universidadModel,'Ciudad_codCiudad'); ?>
    <?php 
    $lista_tres=array();
    if(isset($universidadModel->Ciudad_codCiudad)){
        $id_dos=intval($universidadModel->Provincia_codProvincia);
        $lista_tres = CHtml::listData(Ciudad::model()->findAll("Provincia_codProvincia = '$id_dos'"),'codCiudad','NombreCiudad');
    }
    
    echo $form->dropDownList($universidadModel,'Ciudad_codCiudad',$lista_tres,array('prompt'=>'Seleccione'));?>
    <?php echo $form->error($universidadModel,'Ciudad_codCiudad'); ?>
</div>