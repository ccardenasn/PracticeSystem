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
	
	<div class="container" id="page" style="position: relative;">
		
		<div id="logo" style="background-color: #CCC; height: 124px; width: 130px; position: absolute; left: 18px; margin-top: 3px;">
			<center><img src="images/Logo/uachlogo.png" alt style="margin-top: 11px;"></center>
		</div>
		
		<div id="header" style='height:105px;' align='right'>
			<!--<div id="logosis" alt style="margin-top: 40px; margin-right: 530px;">
			<img src="images/Logo/sistemapracticas.png"></div>-->
		</div><!-- header -->
		
		<div id="mainMbMenu">
			<?php include_once('FunProfile.php');
			$this->widget('application.extensions.mbmenu.MbMenu',array(
				'htmlOptions'=>array('style'=>'height:28px; background-color:#E8E8E8;'),
				'items'=>array(
					//array('label'=>'Cambiar Contraseña', 'url'=>array('/estudiantelogin/update')),
					//array('label'=>'Acerca de', 'url'=>array('/site/page', 'view'=>'about')),
					//array('label'=>'Contacto', 'url'=>array('/site/contact')),
					array('label'=>'Iniciar Sesion','itemOptions'=>array('style'=>'float:right;'),'linkOptions'=>array('style' => 'color: #999;','onmouseover'=>"this.style.color='#666'",'onmouseout'=>"this.style.color='#999'"), 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
					array('label'=>'Cerrar Sesión ('.Yii::app()->user->name.')','itemOptions'=>array('style'=>'float:right;'),'linkOptions'=>array('style' => 'color: #999;','onmouseover'=>"this.style.color='#666'",'onmouseout'=>"this.style.color='#999'"), 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
					array('label'=>'Gestión','itemOptions'=>array('style'=>'float:right;'),'linkOptions'=>array('style' => 'color: #999;','onmouseover'=>"this.style.color='#666'",'onmouseout'=>"this.style.color='#999'"),
						  'items'=>array(
							  array('label'=>'Gestión Organizativa','linkOptions'=>array('style' => 'color: #666;'),
									'items'=>array(
										array('label'=>'Centros de Práctica','linkOptions'=>array('style' => 'color: #666;'),'url'=>array('/centropractica'),'visible'=>$ask->isAdmins()),
										array('label'=>'Secretaria CP','linkOptions'=>array('style' => 'color: #666;'),'url'=>array('/secretariacp'),'visible'=>$ask->isAdmins()),
										array('label'=>'Director CP','linkOptions'=>array('style' => 'color: #666;'),'url'=>array('/directorcp'),'visible'=>$ask->isAdmins()),
										array('label'=>'Jefe UTP CP','linkOptions'=>array('style' => 'color: #666;'),'url'=>array('/jefeutpcp'),'visible'=>$ask->isAdmins()),
										array('label'=>'Profesor Coordinador de Practicas CP','linkOptions'=>array('style' => 'color: #666;'),'url'=>array('/profesorcoordinadorpracticacp'),'visible'=>$ask->isAdmins()),
										array('label'=>'Profesor Guia CP','linkOptions'=>array('style' => 'color: #666;'),'url'=>array('/profesorguiacp'),'visible'=>$ask->isAdmins()),
										array('label'=>'Configuracion de Practicas','linkOptions'=>array('style' => 'color: #666;'),'url'=>array('/configuracionpractica'),'visible'=>$ask->isAdmins()),
									),
								   ),
							  array('label'=>'Gestión Pedagógica','linkOptions'=>array('style' => 'color: #666;'),
									'items'=>array(
										array('label'=>'Planificación de Clases','linkOptions'=>array('style' => 'color: #666;'),'url'=>array('/planificacionclaseadministrador'),'visible'=>$ask->isAdmins()),
										array('label'=>'Planificación de Clases','linkOptions'=>array('style' => 'color: #666;'),'url'=>array('/planificacionclaseresponsable'),'visible'=>$ask->isResponsable()),
									),
								   ),
							  array('label'=>'Gestión de Información','linkOptions'=>array('style' => 'color: #666;'),
									'items'=>array(
										array('label'=>'Horario','linkOptions'=>array('style' => 'color: #666;'),'url'=>array('/horarioadmin'),'visible'=>$ask->isResponsable() || $ask->isAdmins()),
										array('label'=>'Estadísticas','linkOptions'=>array('style' => 'color: #666;'), 'url'=>array('/graphdata'),'visible'=>$ask->isResponsable() || $ask->isAdmins()),
									),
								   ),
						  ),
						 ),
					array('label'=>'Planificación de Clases/Bitacoras','itemOptions'=>array('style'=>'float:right;'),'linkOptions'=>array('style' => 'color: #999;','onmouseover'=>"this.style.color='#666'",'onmouseout'=>"this.style.color='#999'"),'url'=>array('/planificacionclase'),'visible'=>$ask->isStudent()),
					array('label'=>'Horario','itemOptions'=>array('style'=>'float:right;'),'linkOptions'=>array('style' => 'color: #999;','onmouseover'=>"this.style.color='#666'",'onmouseout'=>"this.style.color='#999'"), 'url'=>array('/horario'),'visible'=>$ask->isStudent()),
					array('label'=>'Administración','itemOptions'=>array('style'=>'float:right;'),'linkOptions'=>array('style' => 'color: #999;','onmouseover'=>"this.style.color='#666'",'onmouseout'=>"this.style.color='#999'"),
						  'items'=>array(
							  array('label'=>'Universidad','linkOptions'=>array('style' => 'color: #666;'),'url'=>array('/universidadmain'),'visible'=>$ask->isAdmins()),
							  array('label'=>'Menciones','linkOptions'=>array('style' => 'color: #666;'),'url'=>array('/mencion'),'visible'=>$ask->isAdmins()),
							  array('label'=>'Estudiantes','linkOptions'=>array('style' => 'color: #666;'),'url'=>array('/estudiante'),'visible'=>$ask->isAdmins()),
							  array('label'=>'Estudiantes','linkOptions'=>array('style' => 'color: #666;'),'url'=>array('/estudianteresponsable'),'visible'=>$ask->isResponsable()),
							  array('label'=>'Director de Carrera','linkOptions'=>array('style' => 'color: #666;'),'url'=>array('/directorcarrera'),'visible'=>$ask->isAdmins()),
							  array('label'=>'Coordinador de Practicas','linkOptions'=>array('style' => 'color: #666;'),'url'=>array('/docentecoordinadorpracticas'),'visible'=>$ask->isDirector()),
							  array('label'=>'Docente Responsable de Practica','linkOptions'=>array('style' => 'color: #666;'),'url'=>array('/docenteresponsablepractica'),'visible'=>$ask->isAdmins()),
							  array('label'=>'Dependencias','linkOptions'=>array('style' => 'color: #666;'), 'url'=>array('/dependencia'),'visible'=>$ask->isAdmins()),
							  array('label'=>'Nivel Educacional','linkOptions'=>array('style' => 'color: #666;'), 'url'=>array('/niveleducacional'),'visible'=>$ask->isAdmins()),
						  ),
						 ),
					array('label'=>'Perfil','itemOptions'=>array('style'=>'float:right;'),'linkOptions'=>array('style' => 'color: #999;','onmouseover'=>"this.style.color='#666'",'onmouseout'=>"this.style.color='#999'"), 'url'=>array(findProfileURL(Yii::app()->user->name)),'visible'=>$ask->isStudent() || $ask->isAdmins() || $ask->isResponsable()),
					array('label'=>'Inicio','itemOptions'=>array('style' => 'background-color: #E8E8E8; float:right;'),'linkOptions'=>array('style' => 'color: #999;','onmouseover'=>"this.style.color='#666'",'onmouseout'=>"this.style.color='#999'"),'url'=>array('/site/index')),
				),
			));
			?>
		</div><!-- mainmenu -->
		
		<div id='pix' style='height:10px;'></div>
		
		<?php if(isset($this->breadcrumbs)):?>
		
		<?php 
		$this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
			'homeLink' => CHtml::link('Inicio', Yii::app()->homeUrl),)); ?><!-- breadcrumbs -->
		<?php endif?>
		
		<?php echo $content; ?>
		
		<div class="clear"></div>
		
		<div id="footer">
			<div id="logosis" alt style="margin-top: 10px; align:center">
				<img src="images/Logo/sistemapracticas.png">
			</div><br>
			Copyright &copy; <?php date_default_timezone_set('America/Santiago'); echo date('Y'); ?> by My Company.<br/>
			All Rights Reserved.<br/>
			<?php echo Yii::powered(); ?>
		</div><!-- footer -->
	</div><!-- page -->
	</body>
</html>