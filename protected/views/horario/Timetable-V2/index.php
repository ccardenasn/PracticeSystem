<script type='text/javascript' src="jsTimetableFunctions/jquery.min.js"></script>
<script type='text/javascript' src="jsTimetableFunctions/dependentdropdown.js"></script>
<script type='text/javascript' src="jsTimetableFunctions/conditioncells.js"></script>
<script type='text/javascript' src="jsTimetableFunctions/changecells.js"></script>
<script type='text/javascript' src="jsTimetableFunctions/functions.js"></script>
<link rel="stylesheet" type="text/css" href="cssTimetableStyles/styleTable.css">
<link rel="stylesheet" type="text/css" href="cssTimetableStyles/styleForm.css">

<div id="table_div">
	<?php
	include('tableForm.php');
	?>
</div>

<div id="form_div" style="display:none;">
	<?php
	include('subjectForm.php');
	?>
</div>

<div id=btnSave_div>
	<input type="button" name="btnSave" id="btnSave" value="Guardar" onclick="javascript:obtener();"  action="saveTable.php">
</div>


