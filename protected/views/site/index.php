<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Bienvenido a <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1><br>

<?php echo CHtml::link("<font size=2>Cambiar Contraseña.</font>",array('estudiantelogin/update&id='.Yii::app()->user->name),array('style'=> 'text-decoration:none')); ?>

<p></p>

<p></p>
