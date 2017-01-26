<script type='text/javascript' src="jsTimetableFunctions/jquery.min.js"></script>
<script type='text/javascript' src="jsTimetableFunctions/blockFunctions.js"></script>
<script type='text/javascript' src="jsTimetableFunctions/blockChangeCells.js"></script>
<script type='text/javascript' src="jsTimetableFunctions/blockConditionCells.js"></script>
<link rel="stylesheet" type="text/css" href="cssTimetableStyles/styleTable.css">
<link rel="stylesheet" type="text/css" href="cssTimetableStyles/styleInitForm.css">
<link rel="stylesheet" type="text/css" href="cssTimetableStyles/styleEndForm.css">

<div id="table_div">
	<?php
	include('tableBlockForm.php');
	?>
</div>

<div id="formInit_div" style="display:none;">
	<?php
	include('timeInitForm.php');
	?>
</div>

<div id="formEnd_div" style="display:none;">
	<?php
	include('timeEndForm.php');
	?>
</div>