<?php
$ask = new UserIdentity('','');

$this->pageTitle= Yii::app()->name." - "."Horarios";

$this->breadcrumbs=array(
	'Horarios',
);

$this->menu=array(
	array('label'=>'Administración de Horarios', 'url'=>array('admin')),
	array('label'=>'Asignar Horas', 'url'=>array('bloque/batchUpdate'),'visible'=>$ask->isAdmins()),
	array('label'=>'Semestres', 'url'=>array('semestre/index'),'visible'=>$ask->isAdmins()),
	array('label'=>'Asignatura', 'url'=>array('asignatura/index'),'visible'=>$ask->isAdmins()),
);

?>

<h1>Horarios</h1><br>

<?php if(Yii::app()->user->hasFlash('message')):?>
    <div class="row buttons">
        <?php echo Yii::app()->user->getFlash('message'); ?>
    </div>
    <?php endif; ?>

<ul>
	<h4>Bienvenido a la sección de Administración de Horarios.</h4>
</ul>

<ul align=justify>
	<h4>Opciones Disponibles</h4>
	<li><b>Administración de Horarios:</b> Permite visualizar una lista de todos los estudiantes que hallan creado su horario de clases previamente, desde allí se puede observar, editar y/o eliminar la información correspondiente.</li><br>
	<li><b>Asignar Horas:</b> Ofrece la posibilidad de cambiar las horas en las cuales se llevan a cabo cada uno de los bloques de clases disponibles para el horario.</li><br>
	<li><b>Semestres:</b> A través de esta sección se puede agregar la cantidad de semestres de duración de la carrera.</li><br>
	<li><b>Asignaturas:</b> Permite añadir asignaturas además de especificar el semestre en el cual se imparten.</li>
</ul>
<p><br/>