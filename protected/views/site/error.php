<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
	'Error',
);
?>

<h2>¡Advertencia!<?php //echo $code; ?></h2>

<div class="error">
    <ul>
        <li>Operación no permitida.</li>
    </ul>
<?php //echo CHtml::encode($message); ?>
</div>