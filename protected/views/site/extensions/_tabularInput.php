

<tr>
<?php echo CHtml::activeLabelEx($model,"Curso"); ?>
	<?php echo CHtml::activeTextField($model,"[$index]Curso"); ?>
	<?php echo CHtml::error($model,"[$index]Curso"); ?>



	<?php echo CHtml::activeLabelEx($model,"Hora"); ?>
	<?php echo CHtml::activeTextField($model,"[$index]Hora"); ?>
	<?php echo CHtml::error($model,"[$index]Hora"); ?>



	<?php echo CHtml::activeLabelEx($model,"Asignatura"); ?>
	<?php echo CHtml::activeTextField($model,"[$index]Asignatura"); ?>
	<?php echo CHtml::error($model,"[$index]Asignatura"); ?>
</tr>