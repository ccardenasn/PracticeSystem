<?php $row_id = "clasebitacora-" . $key ?>
<div class='row-fluid' id="<?php echo $row_id ?>">
    <?php
    $form->hiddenField($model, "[$key]CodClaseBitacora");
echo $form->updateTypeField($model,$key,"CodClaseBitacora",array('key'=>$key));
  //echo $form->updateTypeField($model, $key, "updateType", array('key' => $key));
    ?>
    <div class="span3">
        <?php
		echo $form->labelEx($model,"[$key]Curso");
		echo $form->textField($model,"[$key]Curso",array('size'=>15,'maxlength'=>45));
		echo $form->error($model,"[$key]Curso");
        ?>
 
    </div>
 
    <div class="span3">
        <?php
        echo $form->labelEx($model,"[$key]NumeroAlumnos");
		echo $form->textField($model,"[$key]NumeroAlumnos",array('size'=>15,'maxlength'=>45));
		echo $form->error($model,"[$key]NumeroAlumnos");
        ?>
    </div>
 
    <div class="span3">
        <?php
        echo $form->labelEx($model,"[$key]Hora");
		echo $form->textField($model,"[$key]Hora",array('size'=>15,'maxlength'=>45));
		echo $form->error($model,"[$key]Hora");
        ?>
    </div>
	
	<div class="span3">
        <?php
        echo $form->labelEx($model,"[$key]Asignatura");
		echo $form->textField($model,"[$key]Asignatura",array('size'=>15,'maxlength'=>45));
		echo $form->error($model,"[$key]Asignatura");
        ?>
    </div>
	
	<div class="span3">
        <?php
        echo $form->labelEx($model,"[$key]ProfesorGuia");
		echo $form->textField($model,"[$key]ProfesorGuia",array('size'=>15,'maxlength'=>45));
		echo $form->error($model,"[$key]ProfesorGuia");
        ?>
    </div>
	
    <div class="span2">
 
            <?php echo $form->deleteRowButton($row_id, $key); ?>
        </div>
</div>