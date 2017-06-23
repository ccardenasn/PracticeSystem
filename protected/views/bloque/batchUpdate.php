<?php
/* @var $this BloqueController */
/* @var $model Bloque */

$this->pageTitle= Yii::app()->name." - "."Asignar Horas";

$this->breadcrumbs=array(
	'Horarios'=>array('horarioadmin/index'),
	'Asignar Horas',
);

$this->menu=array(
	array('label'=>'Horarios', 'url'=>array('horarioadmin/index')),
	array('label'=>'Semestres', 'url'=>array('semestre/index')),
	array('label'=>'Asignaturas', 'url'=>array('asignatura/index')),
);
?>

<h1>Asignar Horas</h1><br>

<div class="collapse">
    <h3>Ayuda</h3>
    <ul align=justify>
        <ul>
            <h4>Instrucciones</h4>
            <li>Para cambiar la información de hora haga click sobre los campos de texto de las columnas <strong>"Hora Inicio"</strong> u <strong>"Hora Fin"</strong> correspondientes al bloque que desee modificar.</li>
            <li>Al hacer click en cada campo se desplegará un control que permitirá cambiar la información correspondiente a minutos y segundos.</li>
            <li>Una vez realizados los cambios se debe hacer click en el botón <strong>"Guardar Cambios"</strong> situado en la esquina inferior izquierda de la ventana.</li>
        </ul>
	</ul>
</div><br>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>

<?php $this->renderPartial('batchUpdateForm', array('items'=>$items)); ?>