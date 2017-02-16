<div class="form">
	<?php echo CHtml::beginForm(); ?>
	<?php $items = Bloque::model()->findAll();?>
	<table>
		<tr>
			<th></th>
			<th>Bloque</th>
			<th>Hora Inicio</th>
			<th>Hora Fin</th>
		</tr>
		<?php foreach($items as $i=>$item): ?>
		<tr>
			<td><?php echo CHtml::activeHiddenField($item,"[$i]CodBloque",array('size'=>15)); ?></td>
			<td><?php echo CHtml::activeTextField($item,"[$i]NombreBloque",array('size'=>15)); ?></td>
			<td><?php $this->widget('ext.timepicker.timepicker',
									array(
										'model' => $item,
										'name' => "HoraInicio",
										'tabularLevel' => "[$i]",
										'options' => array(
											'showOn'=>'focus',
											'timeOnly' => true,
											'timeFormat'=>'hh:mm',
										),
									));?>
			</td>
			<td><?php $this->widget('ext.timepicker.timepicker',
									array(
										'model' => $item,
										'name' => "HoraFin",
										'tabularLevel' => "[$i]",
										'options' => array(
											'showOn'=>'focus',
											'timeOnly' => true,
											'timeFormat'=>'hh:mm',
										),
									));?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
	<?php echo CHtml::submitButton('Guardar Cambios'); ?>
	<?php echo CHtml::endForm(); ?>
</div><!-- form -->