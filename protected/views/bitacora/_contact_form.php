<?php $row_id = "contact-" . $key ?>
<div class='row clearfix' id="<?php echo $row_id ?>">
    <?php
    echo $form->hiddenField($model, "[$key]id");
    echo $form->updateTypeField($model, $key, "updateType", array('key' => $key));
    ?>
    <div class="span-5">
        <?php
        echo $form->textField($model, "[$key]name");
        echo $form->error($model, "[$key]name");
        ?>
    </div>
 
    <div class="span-5">
        <?php
        echo $form->textField($model, "[$key]email");
        echo $form->error($model, "[$key]email");
        ?>
    </div>
 
    <div class="span-5">
 		<?php
        echo $form->textField($model, "[$key]phone");
        echo $form->error($model, "[$key]phone");
        ?>
    </div>
    <div class="span-1">
		<?php echo $form->deleteRowButton($row_id, $key); ?>
	</div>
</div>