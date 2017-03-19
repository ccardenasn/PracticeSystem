<?php $row_id = "profesorguiacp-" . $key ?>

<div class='row clearfix' id="<?php echo $row_id ?>">
    
	<div class="row" style="width:110px;float: left;">
		<?php
		echo $form->labelEx($model,"[$key]RutProfGuiaCP");
		echo $form->textField($model, "[$key]RutProfGuiaCP",array('size'=>10));
    	echo $form->updateTypeField($model, $key, "updateType", array('key' => $key));
 		echo $form->error($model, "[$key]RutProfGuiaCP");
		?>
	</div>
	
    <div class="row" style="width:110px;float: left;">
        <?php
		echo $form->labelEx($model,"[$key]NombreProfGuiaCP");
        echo $form->textField($model, "[$key]NombreProfGuiaCP",array('size'=>10));
        echo $form->error($model, "[$key]NombreProfGuiaCP");
        ?>
    </div>
	
	<div class="row" style="width:110px;float: left;">
		<?php
		echo $form->labelEx($model,"[$key]CursoProfGuiaCP");
        echo $form->textField($model, "[$key]CursoProfGuiaCP",array('size'=>10));
        echo $form->error($model, "[$key]CursoProfGuiaCP");
		?>
		
	</div>
	
	<div class="row" style="width:110px;float: left;">
        <?php
		echo $form->labelEx($model,"[$key]ProfesorJefeProfGuiaCP");
        echo $form->textField($model, "[$key]ProfesorJefeProfGuiaCP",array('size'=>10));
        echo $form->error($model, "[$key]ProfesorJefeProfGuiaCP");
        ?>
    </div>
	
	<div class="row" style="width:110px;float: left;">
        <?php
		echo $form->labelEx($model,"[$key]MailProfGuiaCP");
        echo $form->textField($model, "[$key]MailProfGuiaCP",array('size'=>10));
        echo $form->error($model, "[$key]MailProfGuiaCP");
        ?>
    </div>
	
	<div class="row" style="width:110px;float: left;">
        <?php
		echo $form->labelEx($model,"[$key]TelefonoProfGuiaCP");
        echo $form->textField($model, "[$key]TelefonoProfGuiaCP",array('size'=>10));
        echo $form->error($model, "[$key]TelefonoProfGuiaCP");
        ?>
    </div>
	
	<div class="row" style="width:110px;float: left;">
        <?php
		echo $form->labelEx($model,"[$key]CelularProfGuiaCP");
        echo $form->textField($model, "[$key]CelularProfGuiaCP",array('size'=>10));
        echo $form->error($model, "[$key]CelularProfGuiaCP");
        ?>
    </div>
	
	<div class="row" style="width:110px;float: left;">
        <?php
		echo $form->labelEx($model,"[$key]ImagenProfGuiaCP");
        echo $form->textField($model, "[$key]ImagenProfGuiaCP",array('size'=>10));
        echo $form->error($model, "[$key]ImagenProfGuiaCP");
        ?>
    </div>
 
    <div class="row" style="width:110px;float: left;">
		<?php 
		echo CHtml::label('Borrar','Borrar');
		echo $form->deleteRowButton($row_id, $key); 
		?>
	</div>
</div>