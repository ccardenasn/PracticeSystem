<?php /* @var $this Controller */ 
$ask = new UserIdentity('','');

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		
        <div id="logo">
			<img src="images/Logo/sistemapracticas.png">
		</div>
	</div><!-- header -->

	<div id="mainMbMenu">
		 <?php include_once('FunProfile.php');
            $this->widget('application.extensions.mbmenu.MbMenu',array(
            'items'=>array(
                array('label'=>'Inicio', 'url'=>array('/site/index')),	
                array('label'=>'Perfil', 'url'=>array(findProfileURL(Yii::app()->user->name)),'visible'=>!Yii::app()->user->isGuest),
               
                array('label'=>'Administracion',
                      'items'=>array(
                          array('label'=>'Universidad','url'=>array('/universidadmain'),'visible'=>$ask->isAdmins()),
                          array('label'=>'Carrera','url'=>array('/carrera'),'visible'=>$ask->isAdmins()),
                          array('label'=>'Menciones','url'=>array('/mencion'),'visible'=>$ask->isAdmins()),
                          array('label'=>'Estudiantes','url'=>array('/estudiante'),'visible'=>$ask->isAdmins()),
                          array('label'=>'Director de Carrera','url'=>array('/directorcarrera'),'visible'=>$ask->isAdmins()),
                          array('label'=>'Coordinador de Practicas','url'=>array('/docentecoordinadorpracticas'),'visible'=>$ask->isAdmins()),
                          array('label'=>'Secretaria','url'=>array('/secretariacarrera'),'visible'=>$ask->isAdmins()),
                          array('label'=>'Docente Responsable de Practica','url'=>array('/docenteresponsablepractica'),'visible'=>$ask->isAdmins()),
                          array('label'=>'Docente Supervisor de Practica','url'=>array('/docentesupervisorpractica'),'visible'=>$ask->isAdmins()),
						  array('label'=>'Horario','url'=>array('/horarioadmin'),'visible'=>$ask->isAdmins()),
						  array('label'=>'Estadísticas', 'url'=>array('/graphData'),'visible'=>$ask->isAdmins()),
						  array('label'=>'Documentos', 'url'=>array('/documentoscarrera'),'visible'=>$ask->isAdmins()),
                    ),
                ),
                array('label'=>'Gestion Organizativa',
                        'items'=>array(
                          array('label'=>'Centro de Practicas','url'=>array('/centropracticamain'),'visible'=>$ask->isAdmins()),
                          array('label'=>'Secretaria CP','url'=>array('/secretariacp'),'visible'=>$ask->isAdmins()),
                          array('label'=>'Director CP','url'=>array('/directorcp'),'visible'=>$ask->isAdmins()),
                          array('label'=>'Jefe UTP CP','url'=>array('/jefeutpcp'),'visible'=>$ask->isAdmins()),
                          array('label'=>'Profesor Coordinador de Practicas CP','url'=>array('/profesorcoordinadorpracticacp'),'visible'=>$ask->isAdmins()),
                          array('label'=>'Profesor Guia CP','url'=>array('/profesorguiacp'),'visible'=>$ask->isAdmins()),
                          array('label'=>'Configuracion de Practicas','url'=>array('/configuracionpractica'),'visible'=>$ask->isAdmins()),
                    ),
                ),
                array('label'=>'Gestion Pedagógica',
                        'items'=>array(
                          array('label'=>'Planificación de Clases Admin','url'=>array('/planificacionclaseadministrador'),'visible'=>$ask->isAdmins()),
                    ),
                ),
				array('label'=>'Horario', 'url'=>array('/horario'),'visible'=>$ask->isStudent()),
				array('label'=>'Planificación de Clases/Bitacoras','url'=>array('/planificacionclase'),'visible'=>$ask->isStudent()),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
                array('label'=>'Iniciar Sesion', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                
            ),
    )); ?>
	
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
	<?php $this->widget('zii.widgets.CBreadcrumbs', array(
	'links'=>$this->breadcrumbs,
	'homeLink' => CHtml::link('Inicio', Yii::app()->homeUrl),)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
