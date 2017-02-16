<?php
/* @var $this BloqueController */
/* @var $model Bloque */

$this->breadcrumbs=array(
	'Horarios'=>array('horarioadmin/index'),
	'Configuración de Bloques',
);

$this->menu=array(
	array('label'=>'Horarios', 'url'=>array('horarioadmin/index')),
	array('label'=>'Semestres', 'url'=>array('semestre/index')),
	array('label'=>'Asignaturas', 'url'=>array('asignatura/index')),
);
?>

<h1>Configuración de Bloques</h1><br>

<ul>
	<h4>Instrucciones</h4>
	<li>Para cambiar la informacion de hora haga click sobre los campos de texto de las columnas "Hora Inicio" u "Hora Fin" correspondientes al bloque que desee modificar.</li>
	<li>Al hacer click en cada campo se desplegará un control que permitirá cambiar la información correspondiente a minutos y segundos.</li>
	<li>Una vez realizados los cambios se debe hacer click en el botón "Guardar Cambios" situado en la esquina inferior izquierda de la ventana.</li>
</ul>

<?php $this->renderPartial('batchUpdateForm', array('items'=>$items)); ?>