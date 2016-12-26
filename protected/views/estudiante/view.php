<?php
/* @var $this EstudianteController */
/* @var $model Estudiante */

$this->breadcrumbs=array(
	'Estudiantes'=>array('index'),
	$model->RutEstudiante,
);

$this->menu=array(
	array('label'=>'Lista de Estudiantes', 'url'=>array('index')),
	array('label'=>'Añadir Estudiante', 'url'=>array('create')),
	array('label'=>'Modificar Estudiante', 'url'=>array('update', 'id'=>$model->RutEstudiante)),
	array('label'=>'Eliminar Estudiante', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RutEstudiante),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Estudiantes', 'url'=>array('admin')),
	array('label'=>'Añadir Planificacion', 'url'=>array('planificacionclaseadministrador/create','id'=>$model->RutEstudiante)),
	array('label'=>'Planificaciones de Estudiante','url'=>array('planificacionclaseadministrador/index','id'=>$model->RutEstudiante)),
	array('label'=>'Administrar Planificaciones', 'url'=>array('planificacionclaseadministrador/admin')),
	
	
    
);
?>

<h1>Estudiante: <?php echo $model->NombreEstudiante; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array('name'=>'Rut','value'=>$model->RutEstudiante),
        array('name'=>'Nombre','value'=>$model->NombreEstudiante),
        array('name'=>'Clave','value'=>$model->ClaveEstudiante),
        array('name'=>'Año Incorporación','value'=>$model->FechaIncorporacion),
        array('name'=>'Mencion','value'=>$model->Mencion_NombreMencion),
        array('name'=>'Mail','value'=>$model->MailEstudiante),
		array('name'=>'Telefono','value'=>$model->TelefonoEstudiante),
		array('name'=>'Celular','value'=>$model->CelularEstudiante),
        array('name'=>'Profesor Guia CP','value'=>$model->ProfesorGuiaCP_RutProfGuiaCP),
		array('name'=>'Nombre Practica','value'=>$model->ConfiguracionPractica_NombrePractica),
        array('name'=>'Centro de Practica','value'=>$model->centroPracticaRBD->NombreCentroPractica),
        array(
            'name'=>'ImagenEstudiante',
			'type' => 'raw',
            'value'=>CHtml::Image(Yii::app()->request->baseUrl.'/images/ImagenEstudiantes/'.$model->ImagenEstudiante)
            ),
        array('name'=>'Sesiones Planificadas','value'=>$model->SesionesPlanificadas),
        array('name'=>'Horas Planificadas','value'=>$model->HorasPlanificadas),
	),
)); ?>
