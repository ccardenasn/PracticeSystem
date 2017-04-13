<?php
include_once('semestres.php');

class UniversidadmainController extends Controller
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
				//'users'=>array('*'),
				'users'=>Universidad::model()->getAdmins(),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				//'users'=>array('@'),
				'users'=>Universidad::model()->getAdmins(),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				//'users'=>array('@'),
				'users'=>Universidad::model()->getAdmins(),
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
		$universidadModel=new Universidad;
		$carreraModel=new Carrera;
		$secretariaModel=new Secretariacarrera;

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation(array($universidadModel,$carreraModel,$secretariaModel));

		if(isset($_POST['Universidad'],$_POST['Carrera'],$_POST['Secretariacarrera']))
		{
			$universidadModel->attributes=$_POST['Universidad'];
			$carreraModel->attributes=$_POST['Carrera'];
			$secretariaModel->attributes=$_POST['Secretariacarrera'];
			
			//if($model->save())
			//	$this->redirect(array('view','id'=>$universidadModel->NombreInstitucion));
			
			$universidadModel->save();
			
			$carreraModel->Universidad_NombreInstitucion = $universidadModel->NombreInstitucion;
				
			createSemesters($carreraModel->SemestresCarrera);
			
			$carreraModel->save();
			
			
			$secretariaModel->Carrera_codCarrera = $carreraModel->codCarrera;
			
			//$secretariaModel->save();
			
			$file=$secretariaModel->ImagenSecretaria=CUploadedFile::getInstance($secretariaModel,'ImagenSecretaria');
			
			if($secretariaModel->save()){
				if($file != null){
					if($file->getExtensionName()=="jpg" or $file->getExtensionName()=="jpeg" or $file->getExtensionName()=="png"){
						//se guarda la ruta de la imagen
						$secretariaModel->ImagenSecretaria->saveAs(Yii::getPathOfAlias("webroot")."/images/ImagenSecretaria/".$file->getName());
					}else{
						Yii::app()->user->setFlash('mensaje','Solo fotos JPG o PNG por favor');
						$this->refresh();
					}	
				}
			}
			
			
			$this->redirect(array('view','id'=>$universidadModel->NombreInstitucion));
		}

		$this->render('create',array(
			'universidadModel'=>$universidadModel,
			'carreraModel'=>$carreraModel,
			'secretariaModel'=>$secretariaModel,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$carreraModel=new Carrera;
		$secretariaModel=new Secretariacarrera;
		
		$universidadModel=$this->loadModel($id);
		$carreraModel=Carrera::model()->find('Universidad_NombreInstitucion=?',array($id));
		$secretariaModel=Secretariacarrera::model()->find('Carrera_codCarrera=?',array($carreraModel->codCarrera));

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation(array($universidadModel,$carreraModel,$secretariaModel));

		if(isset($_POST['Universidad'],$_POST['Carrera'],$_POST['Secretariacarrera']))
		{
			$universidadModel->attributes=$_POST['Universidad'];
			$carreraModel->attributes=$_POST['Carrera'];
			$secretariaModel->attributes=$_POST['Secretariacarrera'];
			
			$universidadModel->save();
			
			$carreraModel->Universidad_NombreInstitucion = $universidadModel->NombreInstitucion;
			
			$totalSemesters = countSemesters();
			$mainSemesters = $carreraModel->SemestresCarrera;
			
			if($totalSemesters != $mainSemesters){
				deleteSemesters();
				createSemesters($carreraModel->SemestresCarrera);
			}		
			
			$carreraModel->save();
			
			$file=$secretariaModel->ImagenSecretaria=CUploadedFile::getInstance($secretariaModel,'ImagenSecretaria');
			
			if($secretariaModel->save()){
				if($file != null){
					if($file->getExtensionName()=="jpg" or $file->getExtensionName()=="jpeg" or $file->getExtensionName()=="png"){
						//se guarda la ruta de la imagen
						$secretariaModel->ImagenSecretaria->saveAs(Yii::getPathOfAlias("webroot")."/images/ImagenSecretaria/".$file->getName());
					}else{
						Yii::app()->user->setFlash('mensaje','Solo fotos JPG o PNG por favor');
						$this->refresh();
					}	
				}
			}
			
			$this->redirect(array('view','id'=>$universidadModel->NombreInstitucion));
		}

		$this->render('update',array(
			'universidadModel'=>$universidadModel,
			'carreraModel'=>$carreraModel,
			'secretariaModel'=>$secretariaModel,
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
		$dataProvider=new CActiveDataProvider('Universidad');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Universidad('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Universidad']))
			$model->attributes=$_GET['Universidad'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Universidad the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Universidad::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Universidad $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='universidad-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	public function actionSelectProvincia()
	{
		$id_uno = $_POST['Universidad']['Region_codRegion'];
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
		$id_dos = $_POST['Universidad']['Provincia_codProvincia'];
		$lista = Ciudad::model()->findAll('Provincia_codProvincia = :id_dos',array(':id_dos'=>$id_dos));
		$lista = CHtml::listData($lista,'codCiudad','NombreCiudad');
		
		echo CHtml::tag('option',array('value'=>''),'Seleccione',true);
		
		foreach($lista as $valor => $descripcion){
			echo CHtml::tag('option',array('value'=>$valor),CHtml::encode($descripcion),true);
		}
	}
}
