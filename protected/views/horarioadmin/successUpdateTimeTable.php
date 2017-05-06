<?php
$rutStudent=Yii::app()->getRequest()->getParam('model');

?>

<ul>
	<div id="errorMessage" class="flash-success" style="text-align:center" align="center">
		<p><strong>¡Operación realizada!</strong></p>
		<ul>
			<li>Haga click <?php echo CHtml::link('Aquí',array('horarioAdmin/index')); ?> para ir al menú principal de horario.</li>
		</ul>
	</div>
</ul><br>