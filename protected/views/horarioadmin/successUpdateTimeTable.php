<?php
$rutStudent=Yii::app()->getRequest()->getParam('model');

?>

<ul>
	<img src="images/messageImages/vaultboysuccess.png">
	<h1>¡Horario actualizado con éxito!</h1>
	<br><br>
	<li><h2>Haga click <?php echo CHtml::link('Aquí',array('horarioAdmin/index')); ?> para ir al menú principal de horario.</h2></li>
	<li><h2>Si desea continuar realizando modificaciones al horario, haga click <?php echo CHtml::link('Aquí',array('horarioAdmin/view','model'=>$rutStudent)); ?> para regresar a la pagina anterior.</h2></li>
</ul><br>