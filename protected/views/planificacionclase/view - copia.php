<?php
/* @var $this PlanificacionclaseController */
/* @var $model Planificacionclase */

$this->pageTitle= Yii::app()->name." - "."Detalles";


?>

<h1>Error</h1>

<?php if(Yii::app()->user->hasFlash('message')):?>
<div class="row buttons">
	<?php echo Yii::app()->user->getFlash('message'); ?>
</div>
<?php endif; ?>
