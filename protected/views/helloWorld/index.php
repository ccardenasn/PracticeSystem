<div id="data">
   <?php $this->renderPartial('widget', array('myValue'=>$myValue)); ?>
</div>
 
<?php echo CHtml::ajaxButton ("Update data",
                              CController::createUrl('helloWorld/UpdateAjax'), 
                              array('update' => '#data'));
?>


<?php
	
	//$listVeh = array('corvette','lamborghini','ferrari');
$listVeh=CHtml::listData(Centropractica::model()->findAll(),'RBD','NombreCentroPractica','RBD');
	
?>


<?php echo CHtml::dropDownList('vehId', 'vehId',$listVeh , 
  array(
        'empty'=> 'Select Vehicle',
        'ajax' => array(
                        'type' => 'POST', 
                        'url' => CController::createUrl('helloWorld/UpdateAjax'),
                        'data'=> array('vehId'=>'js: $(this).val()'),  
                        'update'=>'#data',
 
                       )
  )
);
?>