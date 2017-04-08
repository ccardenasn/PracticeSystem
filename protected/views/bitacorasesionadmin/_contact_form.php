<?php $row_id = "clasebitacorasesion-" . $key ?>
<div class='row clearfix' id="<?php echo $row_id ?>">
    <?php
    echo $form->hiddenField($model, "[$key]id");
    echo $form->updateTypeField($model, $key, "updateType", array('key' => $key));
    ?>
	
    <div class="row" style="width:110px;float: left;">
        <?php
		echo $form->labelEx($model,"[$key]curso");
        //echo $form->textField($model, "[$key]curso",array('size'=>10));
		echo CHtml::activeTextField($model,"[$key]curso",array('size'=>10));
        echo $form->error($model, "[$key]curso");
		
		
        ?>
    </div>
	
	<div class="row" style="width:110px;float: left;">
		<?php
		echo $form->labelEx($model,"[$key]hora");
        echo $form->textField($model, "[$key]hora",array('size'=>10));
        echo $form->error($model, "[$key]hora");
		?>
		
	</div>
	
	<div class="row" style="width:110px;float: left;">
        <?php
		echo $form->labelEx($model,"[$key]asignatura");
        echo $form->textField($model, "[$key]asignatura",array('size'=>10));
        echo $form->error($model, "[$key]asignatura");
        ?>
    </div>
	
	<div class="row" style="width:110px;float: left;">
        <?php
		echo $form->labelEx($model,"[$key]profesorguia");
        echo $form->textField($model, "[$key]profesorguia",array('size'=>10));
        echo $form->error($model, "[$key]profesorguia");
        ?>
    </div>
	
	<div class="row" style="width:110px;float: left;">
        <?php
		echo $form->labelEx($model,"[$key]numeroalumnos");
        echo $form->textField($model, "[$key]numeroalumnos",array('size'=>10));
        echo $form->error($model, "[$key]numeroalumnos");
        ?>
    </div>
 
    <div class="row" style="width:110px;float: left;">
		<?php 
		echo CHtml::label('Borrar','Borrar');
		echo $form->deleteRowButton($row_id, $key); 
		?>
	</div>
</div>