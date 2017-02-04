<?php /* @var $this Controller */ ?>
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
		
        <div id="logo"><?php echo "<img src=\"images/Logo/sistemapracticas.png\">"; ?></div>
	</div><!-- header -->

	<div id="mainMbMenu">
		 <?php include_once('FunProfile.php');
            $this->widget('application.extensions.mbmenu.MbMenu',array(
            'items'=>array(
                array('label'=>'Inicio', 'url'=>array('/site/index')),
				
                array('label'=>'Perfil', 'url'=>array(findProfileURL(Yii::app()->user->name)),'visible'=>!Yii::app()->user->isGuest),
               
                array('label'=>'Administracion',
                      'items'=>array(
                          array('label'=>'Universidad','url'=>array('/universidad')),
                          array('label'=>'Carrera','url'=>array('/carrera')),
                          array('label'=>'Menciones','url'=>array('/mencion')),
                          array('label'=>'Listar Estudiantes','url'=>array('/listaestudiante/create')),
                          array('label'=>'Estudiantes','url'=>array('/estudiante')),
                          array('label'=>'Director de Carrera','url'=>array('/directorcarrera')),
                          array('label'=>'Coordinador de Practicas','url'=>array('/docentecoordinadorpracticas')),
                          array('label'=>'Secretaria','url'=>array('/secretariacarrera')),
                          array('label'=>'Docente Responsable de Practica','url'=>array('/docenteresponsablepractica')),
                          array('label'=>'Docente Supervisor de Practica','url'=>array('/docentesupervisorpractica')),
						  array('label'=>'Semestre','url'=>array('/semestre')),
						  array('label'=>'Asignaturas','url'=>array('/asignatura')),
						  array('label'=>'Horario',
								'items'=>array(
									array('label'=>'Administración de Horarios','url'=>array('/horarioAdmin/admin')),
									array('label'=>'Bloques','url'=>array('/bloque/batchUpdate')),
									),
							   ),
						  array('label'=>'Graficos', 'url'=>array('/graphData')),
                    ),
                ),
                array('label'=>'Gestion Organizativa',
                        'items'=>array(
                          array('label'=>'Centro de Practicas','url'=>array('/centropractica')),
                          array('label'=>'Secretaria CP','url'=>array('/secretariacp')),
                          array('label'=>'Director CP','url'=>array('/directorcp')),
                          array('label'=>'Jefe UTP CP','url'=>array('/jefeutpcp')),
                          array('label'=>'Profesor Coordinador de Practicas CP','url'=>array('/profesorcoordinadorpracticacp')),
                          array('label'=>'Profesor Guia CP','url'=>array('/profesorguiacp')),
                          array('label'=>'Configuracion de Practicas','url'=>array('/configuracionpractica')),
                    ),
                ),
                array('label'=>'Gestion Pedagógica',
                        'items'=>array(
                          array('label'=>'Planificación de Clases Admin','url'=>array('/planificacionclaseadministrador/admin')),
                    ),
                ),
				array('label'=>'Alumnos',
                        'items'=>array(
                          array('label'=>'Horario', 'url'=>array('/horario')),
                          array('label'=>'Planificación de Clases/Bitacoras','url'=>array('/planificacionclase')),
                    ),
                ),
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
		)); ?><!-- breadcrumbs -->
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
