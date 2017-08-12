<?php
/* @var $this BitacorasesionController */
/* @var $model Bitacorasesion */

$this->pageTitle= Yii::app()->name." - "."Editar";

$this->breadcrumbs=array(
	//'Bitácoras'=>array('index'),
    'Bitácora: Sesion Informada '.$model->planificacionClaseCodPlanificacion->SesionInformada=>array('view','id'=>$model->CodBitacora),
	'Editar',
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Detalles', 'url'=>array('viewPlanificacionBitacora', 'id'=>$model->PlanificacionClase_CodPlanificacion)),
	array('label'=>'Administración', 'url'=>array('admin')),
	array('label'=>'Planificaciones de Estudiante', 'url'=>array('planificacionclase/index')),
);
?>

<h1>Modificar Bitácora</h1><br>
<h2>Estudiante: <?php echo $model->planificacionClaseCodPlanificacion->estudianteRutEstudiante->NombreEstudiante ?> </h2><br>

<div class="collapse">
    <h3>Ayuda</h3>
    <ul align=justify>
        <ul>
            <h4>Instrucciones de Opciones</h4>
            <li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
            <li>Para regresar al índice de bitácoras haga click en <strong>"Lista"</strong>.</li>
            <li>Haga click en <strong>"Detalles"</strong> para visualizar información de bitácora.</li>
            <li>Desde la sección <strong>"Administración"</strong> se puede observar una lista de bitácoras existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en <strong>"Administración"</strong> en el panel <strong>"Opciones"</strong> para acceder.</li>
            <li>Haga click en <strong>"Planificaciones de Estudiante"</strong> para acceder a un listado de planificaciones del estudiante seleccionado.</li>
        </ul>        
    </ul>
</div><br>

<?php $this->renderPartial('_updateForm',
						   array(
							   'model'=>$model,
							   'claseBitacoraModel'=>$claseBitacoraModel,
						   )); ?>