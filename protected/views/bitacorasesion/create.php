<?php
/* @var $this BitacorasesionController */
/* @var $model Bitacorasesion */

$this->pageTitle= Yii::app()->name." - "."Añadir";

$student=Yii::app()->user->name;
$studentData=Estudiante::model()->find('RutEstudiante=?',array($student));

$this->breadcrumbs=array(
	'Bitacoras'=>array('index'),
	'Añadir',
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Añadir Bitácora</h1><br>
<h2>Estudiante: <?php echo $studentData->NombreEstudiante ?> </h2><br>
	
<div class="collapse">
    <h3>Ayuda</h3>
    <ul align=justify>
        <ul>
            <h4>Instrucciones</h4>
            <li>Para regresar al índice de bitácoras haga click en la opción <strong>"Lista"</strong> situada en el panel de opciones ubicado al lado derecho de la ventana.</li>
            <li>Desde la sección <strong>"Administración"</strong> se puede observar una lista de bitacoras existentes, además permite realizar acciones tales como ver, modificar y eliminar datos. Haga click en <strong>"Administración"</strong> en el panel <strong>"Opciones"</strong> para acceder.</li>
            <li>Para acceder a cada formulario debe hacer click en el símbolo <img src="images/FormImages/small_arrow_right.png"> para desplegar.</li>
            <li>Para ocultar un formulario debe hacer click en el símbolo <img src="images/FormImages/small_arrow_down.png">.</li>
        </ul>
    </ul>
</div><br>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>