<?php
/* @var $this HorarioController */
/* @var $model Horario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'horario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Asignatura'); ?>
		<?php echo $form->textField($model,'Asignatura',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Asignatura'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Hora'); ?>
		<?php echo $form->textField($model,'Hora',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Hora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Dia'); ?>
		<?php echo $form->textField($model,'Dia',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Dia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Posicion'); ?>
		<?php echo $form->textField($model,'Posicion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Posicion'); ?>
	</div>
	
	<?php
	$this->widget('ext.EFullCalendar.EFullCalendar', array(
    'themeCssFile'=>'cupertino/theme.css',
    'htmlOptions'=>array(
    'style'=>'width:100%'
    ),
 
    'options'=>array(
        'editable'=>true,
            'selectable'=>true,

            // (bool) use jQuery UI theme
            'theme'=>true,

            // (string) jQuery UI theme name
            // theme place in folder 'cal/component/fullCal'
            'themeName'=>'redmond',

            // (int) 0 - Sun, 1 - Mon
            'firstDay'=>0,

            'timeFormat'=>'H(:mm)',
            'header'=>array(
                            'left'=>'today prev,next',
                            'center'=>'title', //basicWeek,basicDay,
                            'right'=>'month,agendaWeek,agendaDay'), //month,agendaWeek,agendaDay
            'defaultView'=>'month',
            'buttonText'=>array(
                            'today'=>'Today',
                            'month'=>'Month',
                            'week'=>'Week',
                            'day'=>'Day',
            ),
            'monthNames'=>array('January', 'February', 'March', 'April', 'May', 'June', 'July',
                            'August', 'September', 'October', 'November', 'December'),
            'monthNamesShort'=>array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                            'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'),
            'dayNames'=>array('Sunday', 'Monday', 'Tuesday', 'Wednesday',
                            'Thursday', 'Friday', 'Saturday'),
            'dayNamesShort'=>array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'),
            'allDayText'=>'All day',
            'axisFormat'=>'HH(:mm)',
            'slotMinutes'=>30,
            'firstHour'=>8,     // first visible hour
            'minTime'=>'7:30',  // start day time
            'maxTime'=>'21:00', // end day time

            // Cron check all events for all users
            // from now to (now + cronPeriod)
            // and send alert via e-mail or/and sms.
            // Call controller 'cal/cron' every 'cronPeriod' minutes.
            // User preference dialog hidded if value set to 0.
            'cronPeriod'=>60, // minutes
        
        
    )
));
	
	?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->