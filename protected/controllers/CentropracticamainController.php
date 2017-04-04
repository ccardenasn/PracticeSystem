<?php
include_once('centroPracticaFunctions.php');

class CentropracticamainController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','selectProvincia','selectCiudad'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$centroModel=new Centropractica;
		$secretariaModel=new Secretariacp;
		$directorModel=new Directorcp;
		$jefeutpModel=new Jefeutpcp;
		$coordinadorModel=new Profesorcoordinadorpracticacp;
		//$profesorModel=new Profesorguiacp;
		
		//$secretariaModel=new Secretariacp;
		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation(array($centroModel,$secretariaModel,$directorModel,$jefeutpModel,$coordinadorModel));

		if(isset($_POST['Centropractica'],$_POST['Secretariacp'],$_POST['Directorcp'],$_POST['Jefeutpcp'],$_POST['Profesorcoordinadorpracticacp']))
		{
			$centroModel->attributes=$_POST['Centropractica'];
			$secretariaModel->attributes=$_POST['Secretariacp'];
			$directorModel->attributes=$_POST['Directorcp'];
			$jefeutpModel->attributes=$_POST['Jefeutpcp'];
			$coordinadorModel->attributes=$_POST['Profesorcoordinadorpracticacp'];
			//$profesorModel->attributes=$_POST['Profesorguiacp'];
			
			//se añade esta linea para agregar imagenes, se obtiene la ruta del campo rutaImagenAlojamiento
			$file=$centroModel->AnexoProtocolo=CUploadedFile::getInstance($centroModel,'AnexoProtocolo');
			$image=$centroModel->ImagenCentroPractica=CUploadedFile::getInstance($centroModel,'ImagenCentroPractica');
			
			if($centroModel->save()){
				if($file != null){
					if($file->getExtensionName()=="pdf"){
						$centroModel->AnexoProtocolo->saveAs(Yii::getPathOfAlias("webroot")."/PDFFiles/".$file->getName());
					}else{
						Yii::app()->user->setFlash('mensaje','Solo archivos pdf por favor');
						$this->refresh();
					}	
				}
				
				if($image != null){
					if($image->getExtensionName()=="jpg" or $image->getExtensionName()=="jpeg" or $image->getExtensionName()=="png"){
						//se guarda la ruta de la imagen
						$centroModel->ImagenCentroPractica->saveAs(Yii::getPathOfAlias("webroot")."/images/ImagenCentroPracticas/".$image->getName());
					}else{
						Yii::app()->user->setFlash('mensaje','Solo archivos jpg por favor');
						$this->refresh();
					}	
				}
			}
			
			$secretariaModel->CentroPractica_RBD = $centroModel->RBD;
			$directorModel->CentroPractica_RBD = $centroModel->RBD;
			$jefeutpModel->CentroPractica_RBD = $centroModel->RBD;
			$coordinadorModel->CentroPractica_RBD = $centroModel->RBD;
			//$profesorModel->CentroPractica_RBD = $centroModel->RBD;
			
			$secretariaFile=$secretariaModel->ImagenSecretariaCP=CUploadedFile::getInstance($secretariaModel,'ImagenSecretariaCP');
			
			if($secretariaModel->save()){
				if($secretariaFile != null){
					if($secretariaFile->getExtensionName()=="jpg" or $secretariaFile->getExtensionName()=="jpeg" or $secretariaFile->getExtensionName()=="png"){
						//se guarda la ruta de la imagen
						$secretariaModel->ImagenSecretariaCP->saveAs(Yii::getPathOfAlias("webroot")."/images/ImagenSecretariasCP/".$secretariaFile->getName());
					}else{
						Yii::app()->user->setFlash('mensaje','Solo archivos pdf por favor');
						$this->refresh();
					}
				}
			}
			
			$directorFile=$directorModel->ImagenDirectorCP=CUploadedFile::getInstance($directorModel,'ImagenDirectorCP');
			
			if($directorModel->save()){
				if($directorFile != null){
					if($directorFile->getExtensionName()=="jpg" or $directorFile->getExtensionName()=="jpeg" or $directorFile->getExtensionName()=="png"){
						//se guarda la ruta de la imagen
						$directorModel->ImagenDirectorCP->saveAs(Yii::getPathOfAlias("webroot")."/images/ImagenDirectoresCP/".$directorFile->getName());
					}else{
						Yii::app()->user->setFlash('mensaje','Solo fotos JPG o PNG por favor');
						$this->refresh();
					}
				}
			}
			
			$jefeutpFile=$jefeutpModel->ImagenJefeUTPCP=CUploadedFile::getInstance($jefeutpModel,'ImagenJefeUTPCP');
			
			if($jefeutpModel->save()){
				if($jefeutpFile != null){
					if($jefeutpFile->getExtensionName()=="jpg" or $jefeutpFile->getExtensionName()=="jpeg" or $jefeutpFile->getExtensionName()=="png"){
						//se guarda la ruta de la imagen
						$jefeutpModel->ImagenJefeUTPCP->saveAs(Yii::getPathOfAlias("webroot")."/images/ImagenJefesUTPCP/".$jefeutpFile->getName());
					}else{
						Yii::app()->user->setFlash('mensaje','Solo fotos JPG o PNG por favor');
						$this->refresh();
					}	
				}
			}
			
			$coordinadorFile=$coordinadorModel->ImagenProfCoordGuiaCP=CUploadedFile::getInstance($coordinadorModel,'ImagenProfCoordGuiaCP');
			
			if($coordinadorModel->save()){
				if($coordinadorFile != null){
					if($coordinadorFile->getExtensionName()=="jpg" or $coordinadorFile->getExtensionName()=="jpeg" or $coordinadorFile->getExtensionName()=="png"){
						//se guarda la ruta de la imagen
						$coordinadorModel->ImagenProfCoordGuiaCP->saveAs(Yii::getPathOfAlias("webroot")."/images/ImagenCoordinadoresPracticasCP/".$coordinadorFile->getName());
					}else{
						Yii::app()->user->setFlash('mensaje','Solo archivos pdf por favor');
						$this->refresh();
					}
				}
			}
			
			$rut=$_POST['RutProfGuiaCP'];
			$nombre=$_POST['NombreProfGuiaCP'];
			$curso=$_POST['CursoProfGuiaCP'];
			$profesorjefe=$_POST['ProfesorJefeProfGuiaCP'];
			$correo=$_POST['MailProfGuiaCP'];
			$telefono=$_POST['TelefonoProfGuiaCP'];
			$celular=$_POST['CelularProfGuiaCP'];
			$centro=$centroModel->RBD;
			
			$directorio=Yii::getPathOfAlias("webroot")."/images/ImagenProfesoresGuiaCP";
			
			for($i=0;$i<count($rut);$i++){
				if($rut[$i]!="" && $nombre[$i]!="" && $curso[$i]!="" && $curso[$i]!="" && $profesorjefe[$i]!="" && $correo[$i]!="" && $telefono[$i]!="" && $celular[$i]!=""){
					$imagen=$_FILES['ImagenProfGuiaCP']['name'][$i];
					move_uploaded_file ($_FILES['ImagenProfGuiaCP']['tmp_name'][$i],$directorio."/".$imagen);
					
					$query="insert into profesorguiacp values('$rut[$i]','$nombre[$i]','$curso[$i]','$profesorjefe[$i]','$correo[$i]','$telefono[$i]','$celular[$i]','$centro','$imagen')";
					
					Yii::app()->db->createCommand($query)->execute();
				}
			}
			$this->redirect(array('view','id'=>$centroModel->RBD));
		}
		
		$this->render('create',array(
			'centroModel'=>$centroModel,
			'secretariaModel'=>$secretariaModel,
			'directorModel'=>$directorModel,
			'jefeutpModel'=>$jefeutpModel,
			'coordinadorModel'=>$coordinadorModel,
			//'profesorModel'=>$profesorModel,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$secretariaModel = new Secretariacp;
		$directorModel=new Directorcp;
		$jefeutpModel=new Jefeutpcp;
		$coordinadorModel=new Profesorcoordinadorpracticacp;
		$profesorModel=new Profesorguiacp;
		
		$centroModel=$this->loadModel($id);
		$secretariaModel=Secretariacp::model()->find('CentroPractica_RBD=?',array($id));
		$directorModel=Directorcp::model()->find('CentroPractica_RBD=?',array($id));
		$jefeutpModel=Jefeutpcp::model()->find('CentroPractica_RBD=?',array($id));
		$coordinadorModel=Profesorcoordinadorpracticacp::model()->find('CentroPractica_RBD=?',array($id));
		$profesorModel=Profesorguiacp::model()->findAll('CentroPractica_RBD=?',array($id));
		
		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation(array($centroModel,$secretariaModel,$directorModel,$coordinadorModel));

		if(isset($_POST['Centropractica'],$_POST['Secretariacp'],$_POST['Directorcp'],$_POST['Jefeutpcp'],$_POST['Profesorcoordinadorpracticacp']))
		{
			$centroModel->attributes=$_POST['Centropractica'];
			$secretariaModel->attributes=$_POST['Secretariacp'];
			$directorModel->attributes=$_POST['Directorcp'];
			$jefeutpModel->attributes=$_POST['Jefeutpcp'];
			$coordinadorModel->attributes=$_POST['Profesorcoordinadorpracticacp'];
			//$profesorModel->attributes=$_POST['Profesorguiacp'];
			
			$file=$centroModel->AnexoProtocolo=CUploadedFile::getInstance($centroModel,'AnexoProtocolo');
			$image=$centroModel->ImagenCentroPractica=CUploadedFile::getInstance($centroModel,'ImagenCentroPractica');
			
			if($centroModel->save()){
				if($file != null){
					if($file->getExtensionName()=="pdf"){
						$centroModel->AnexoProtocolo->saveAs(Yii::getPathOfAlias("webroot")."/PDFFiles/".$file->getName());
					}else{
						Yii::app()->user->setFlash('mensaje','Solo archivos pdf por favor');
						$this->refresh();
					}	
				}
				
				if($image != null){
					if($image->getExtensionName()=="jpg" or $image->getExtensionName()=="jpeg" or $image->getExtensionName()=="png"){
						//se guarda la ruta de la imagen
						$centroModel->ImagenCentroPractica->saveAs(Yii::getPathOfAlias("webroot")."/images/ImagenCentroPracticas/".$image->getName());
					}else{
						Yii::app()->user->setFlash('mensaje','Solo archivos jpg por favor');
						$this->refresh();
					}	
				}
			}
			
			$secretariaModel->CentroPractica_RBD = $centroModel->RBD;
			$directorModel->CentroPractica_RBD = $centroModel->RBD;
			$jefeutpModel->CentroPractica_RBD = $centroModel->RBD;
			$coordinadorModel->CentroPractica_RBD = $centroModel->RBD;
			//$profesorModel->CentroPractica_RBD = $centroModel->RBD;
			
			$secretariaFile=$secretariaModel->ImagenSecretariaCP=CUploadedFile::getInstance($secretariaModel,'ImagenSecretariaCP');
			
			if($secretariaModel->save()){
				if($secretariaFile != null){
					if($secretariaFile->getExtensionName()=="jpg" or $secretariaFile->getExtensionName()=="jpeg" or $secretariaFile->getExtensionName()=="png"){
						//se guarda la ruta de la imagen
						$secretariaModel->ImagenSecretariaCP->saveAs(Yii::getPathOfAlias("webroot")."/images/ImagenSecretariasCP/".$secretariaFile->getName());
					}else{
						Yii::app()->user->setFlash('mensaje','Solo archivos pdf por favor');
						$this->refresh();
					}
				}
			}
			
			$directorFile=$directorModel->ImagenDirectorCP=CUploadedFile::getInstance($directorModel,'ImagenDirectorCP');
			
			if($directorModel->save()){
				if($directorFile != null){
					if($directorFile->getExtensionName()=="jpg" or $directorFile->getExtensionName()=="jpeg" or $directorFile->getExtensionName()=="png"){
						//se guarda la ruta de la imagen
						$directorModel->ImagenDirectorCP->saveAs(Yii::getPathOfAlias("webroot")."/images/ImagenDirectoresCP/".$directorFile->getName());
					}else{
						Yii::app()->user->setFlash('mensaje','Solo fotos JPG o PNG por favor');
						$this->refresh();
					}
				}
			}
			
			$jefeutpFile=$jefeutpModel->ImagenJefeUTPCP=CUploadedFile::getInstance($jefeutpModel,'ImagenJefeUTPCP');
			
			if($jefeutpModel->save()){
				if($jefeutpFile != null){
					if($jefeutpFile->getExtensionName()=="jpg" or $jefeutpFile->getExtensionName()=="jpeg" or $jefeutpFile->getExtensionName()=="png"){
						//se guarda la ruta de la imagen
						$jefeutpModel->ImagenJefeUTPCP->saveAs(Yii::getPathOfAlias("webroot")."/images/ImagenJefesUTPCP/".$jefeutpFile->getName());
					}else{
						Yii::app()->user->setFlash('mensaje','Solo fotos JPG o PNG por favor');
						$this->refresh();
					}	
				}
			}
			
			$coordinadorFile=$coordinadorModel->ImagenProfCoordGuiaCP=CUploadedFile::getInstance($coordinadorModel,'ImagenProfCoordGuiaCP');
			
			if($coordinadorModel->save()){
				if($coordinadorFile != null){
					if($coordinadorFile->getExtensionName()=="jpg" or $coordinadorFile->getExtensionName()=="jpeg" or $coordinadorFile->getExtensionName()=="png"){
						//se guarda la ruta de la imagen
						$coordinadorModel->ImagenProfCoordGuiaCP->saveAs(Yii::getPathOfAlias("webroot")."/images/ImagenCoordinadoresPracticasCP/".$coordinadorFile->getName());
					}else{
						Yii::app()->user->setFlash('mensaje','Solo archivos pdf por favor');
						$this->refresh();
					}
				}
			}
			
			//$profesorFile=$profesorModel->ImagenProfGuiaCP=CUploadedFile::getInstance($profesorModel,'ImagenProfGuiaCP');
			
			/*if($profesorModel->save()){
				if($profesorFile != null){
					if($profesorFile->getExtensionName()=="jpg" or $profesorFile->getExtensionName()=="jpeg" or $profesorFile->getExtensionName()=="png"){
						//se guarda la ruta de la imagen
						$profesorModel->ImagenProfGuiaCP->saveAs(Yii::getPathOfAlias("webroot")."/images/ImagenProfesoresGuiaCP/".$profesorFile->getName());
					}else{
						Yii::app()->user->setFlash('mensaje','Solo fotos JPG o PNG por favor');
						$this->refresh();
					}
				}
			}*/
			
			$rut=$_POST['RutProfGuiaCP'];
			$nombre=$_POST['NombreProfGuiaCP'];
			$curso=$_POST['CursoProfGuiaCP'];
			$profesorjefe=$_POST['ProfesorJefeProfGuiaCP'];
			$correo=$_POST['MailProfGuiaCP'];
			$telefono=$_POST['TelefonoProfGuiaCP'];
			$celular=$_POST['CelularProfGuiaCP'];
			$centro=$centroModel->RBD;
			
			$directorio=Yii::getPathOfAlias("webroot")."/images/ImagenProfesoresGuiaCP";
			
			$profData=getProfesorData($centro);
			$start = true;
			$l=0;
			$founded=false;
			
		
			
			for($j=0;$j<count($profData['data']);$j++){
				
				$founded = containsProfArr($profData['data'][$j],$rut);
				
				
				if($founded == false){
					$query="delete from profesorguiacp where RutProfGuiaCP ='".$profData['data'][$j]."'";
					$exist=Yii::app()->db->createCommand($query)->execute();
				}
				
			}
			
			for($i=0;$i<count($rut);$i++){
				if($rut[$i]!="" && $nombre[$i]!="" && $curso[$i]!="" && $curso[$i]!="" && $profesorjefe[$i]!="" && $correo[$i]!="" && $telefono[$i]!="" && $celular[$i]!=""){
					
					$query="";
					$rutExist = containsProf($rut[$i]);
					
					$imagen=$_FILES['ImagenProfGuiaCP']['name'][$i];
					move_uploaded_file ($_FILES['ImagenProfGuiaCP']['tmp_name'][$i],$directorio."/".$imagen);
					
					if($rutExist != 0){
						$query="update profesorguiacp set NombreProfGuiaCP='".$nombre[$i]."',CursoProfGuiaCP='".$curso[$i]."',ProfesorJefeProfGuiaCP='".$profesorjefe[$i]."',MailProfGuiaCP='".$correo[$i]."',TelefonoProfGuiaCP='".$telefono[$i]."',CelularProfGuiaCP='".$celular[$i]."',CentroPractica_RBD='".$centro."',ImagenProfGuiaCP='".$imagen."' where RutProfGuiaCP='".$rut[$i]."'";
					
					}else{
						
						$query="insert into profesorguiacp values('$rut[$i]','$nombre[$i]','$curso[$i]','$profesorjefe[$i]','$correo[$i]','$telefono[$i]','$celular[$i]','$centro','$imagen')";
					}
					
					Yii::app()->db->createCommand($query)->execute();
				}
			}
			
			
			
			
			$this->redirect(array('view','id'=>$centroModel->RBD));
		
		}

		$this->render('update',array(
			'centroModel'=>$centroModel,
			'secretariaModel'=>$secretariaModel,
			'directorModel'=>$directorModel,
			'jefeutpModel'=>$jefeutpModel,
			'coordinadorModel'=>$coordinadorModel,
			'profesorModel'=>$profesorModel,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Centropractica');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Centropractica('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Centropractica']))
			$model->attributes=$_GET['Centropractica'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Centropractica the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Centropractica::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Centropractica $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='centropractica-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	public function actionSelectProvincia()
	{
		$id_uno = $_POST['Centropractica']['Region_codRegion'];
		$lista = Provincia::model()->findAll('Region_codRegion = :id_uno',array(':id_uno'=>$id_uno));
		$lista = CHtml::listData($lista,'codProvincia','NombreProvincia');
		
		echo CHtml::tag('option',array('value'=>''),'Seleccione',true);
		
		foreach($lista as $valor => $descripcion){
			echo CHtml::tag('option',array('value'=>$valor),CHtml::encode($descripcion),true);
		}
	}
	
	//metodo que se utiliza para dropdown anidados, permite autocompletar el campo siguiente respecto a lo seleccionado
	public function actionSelectCiudad()
	{
		$id_dos = $_POST['Centropractica']['Provincia_codProvincia'];
		$lista = Ciudad::model()->findAll('Provincia_codProvincia = :id_dos',array(':id_dos'=>$id_dos));
		$lista = CHtml::listData($lista,'codCiudad','NombreCiudad');
		
		echo CHtml::tag('option',array('value'=>''),'Seleccione',true);
		
		foreach($lista as $valor => $descripcion){
			echo CHtml::tag('option',array('value'=>$valor),CHtml::encode($descripcion),true);
		}
	}
}
