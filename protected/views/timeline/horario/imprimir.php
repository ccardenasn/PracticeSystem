<?php

require_once 'include/config.php';
require_once 'include/functions.php';

if (empty($_GET['horario']))
    {
	header('Location: lista.php');
    }

if (ctype_space($_GET['horario']))
	{
		header('Location: lista.php');
	}

if (is_numeric($_GET['horario']))
	{
		$horario = $_GET['horario'];
	}else{
		header('Location: lista.php');
	}

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Horarios | JHCodes</title>

    <!-- Bootstrap -->
    
	  <?php
	  
	  $baseUrl = Yii::app()->baseUrl; 
	  $cs = Yii::app()->getClientScript();
	  $cs->registerCssFile($baseUrl.'/css/horario/css/custom.css');
	  $cs->registerCssFile($baseUrl.'/css/horario/css/bootstrap.min.css');
	  
	  ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    
    <div class="original">
        <?php printhorario($horario); ?>    	
    </div>

    <div id="finalcanvas"></div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    <?php
	  
	  $base = Yii::app()->baseUrl; 
	  $js = Yii::app()->getClientScript();
	  $js->registerScriptFile($base.'/css/horario/js/jquery.min.js');
	  $js->registerScriptFile($base.'/css/horario/js/bootstrap.min.js');
	  $js->registerScriptFile($base.'/css/horario/js/html2canvas.js');
	  
	  ?>
	  
	  
	  
	  
	  <script type="text/javascript">
        html2canvas($(".original"), {
          onrendered: function(canvas) {
            // document.body.appendChild(canvas);
            var canvasImg = canvas.toDataURL("image/png");

            $('#finalcanvas').html('<img src="'+canvasImg+'" alt="">');
            
           },
           allowTaint: true,
           logging: true,
           useCORS: true
        });
        $('.original').hide();
    </script>    
  </body>
</html>



