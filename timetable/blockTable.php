<?php
include('findBlocks.php');
$hour = hourColumns();
?>

<table id="blockSection" style="width: 198px;" border="2px">
	<tr>
		<th>Horario</th>
	</tr>
	<tr>
		<td> <?php echo $hour[0][0].' a '.$hour[0][1]?> </td>
	</tr>
	<tr>
		<td><?php echo $hour[1][0].' a '.$hour[1][1]?></td>
	</tr>
	<tr>
		<td><?php echo $hour[2][0].' a '.$hour[2][1]?></td>
	</tr>
	<tr>
		<td colspan="1">Tarde</td>
	</tr>
	<tr>
		<td><?php echo $hour[3][0].' a '.$hour[3][1]?></td>
	</tr>
	<tr>
		<td><?php echo $hour[4][0].' a '.$hour[4][1]?></td>
	</tr>
	<tr>
		<td><?php echo $hour[5][0].' a '.$hour[5][1]?></td>
	</tr>
</table>