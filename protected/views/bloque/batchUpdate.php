<div class="form">
	<?php echo CHtml::beginForm(); ?>
	<?php $items = Bloque::model()->findAll();?>
	<table>
		<tr><th>Código Bloque</th><th>Bloque</th><th>Hora Inicio</th><th>Hora Fin</th></tr>
		<?php foreach($items as $i=>$item): ?>
		<tr>
			<td><?php echo CHtml::activeTextField($item,"[$i]CodBloque"); ?></td>
			<td><?php echo CHtml::activeTextField($item,"[$i]NombreBloque"); ?></td>
			<td><?php echo CHtml::activeTextField($item,"[$i]HoraInicio"); ?></td>
			<td><?php echo CHtml::activeTextField($item,"[$i]HoraFin"); ?></td>
		</tr>
		<?php endforeach; ?>
	</table>
	<?php echo CHtml::submitButton('Save'); ?>
	<?php echo CHtml::endForm(); ?>
</div><!-- form -->