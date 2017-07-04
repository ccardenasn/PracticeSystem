<?php
include_once('bitacoraFunctions.php');
include_once('mainFunctions.php');

class PerfildirectorcarreraController extends Controller
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
				'actions'=>array('view'),
				//'users'=>array('*'),
                'users'=>Directorcarrera::model()->getAdmins(),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('update'),
				//'users'=>array('@'),
                'users'=>Directorcarrera::model()->getAdmins(),
			),
			//array('allow', // allow admin user to perform 'admin' and 'delete' actions
				//'actions'=>array('admin','delete'),
				//'users'=>array('admin'),
                //'users'=>directorcarrera::model()->getAdmins(),
			//),
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
		$model=new Perfildirectorcarrera;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Perfildirectorcarrera']))
		{
			$model->attributes=$_POST['Perfildirectorcarrera'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->RutDirector));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	/*public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Perfildirectorcarrera']))
		{
			$model->attributes=$_POST['Perfildirectorcarrera'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->RutDirector));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}*/
    
    public function actionUpdate($id)
	{
        $userRut=Yii::app()->user->name;
		
		$model=$this->loadModel($userRut);
		//$model=$this->loadModel($id);
		
		$imageAttrib = "ImagenDirector";
		$table = "directorcarrera";
		$codTable = "RutDirector";
		
		$oldImage = getImageModel($imageAttrib,$table,$codTable,$id);
		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['Perfildirectorcarrera']))
		{
			$model->attributes=$_POST['Perfildirectorcarrera'];
            
            $rnd = rand(0,9999);
            $file=CUploadedFile::getInstance($model,'ImagenDirector');
            $fileName = "{$rnd}-{$file}";  // numero aleatorio  + nombre de archivo
            
            if($file != null){
                $model->ImagenDirector = $fileName;
            }
			
			if($model->save()){
				if($file != null){
					if($file->getExtensionName()=="jpg" or $file->getExtensionName()=="jpeg" or $file->getExtensionName()=="png"){
						//se guarda la ruta de la imagen
						$file->saveAs(Yii::getPathOfAlias("webroot")."/images/ImagenDirector/".$fileName);
					}else{
						Yii::app()->user->setFlash('message',"<div id='errorMessage' class='flash-error'><p><strong>¡Advertencia!</strong></p><ul><li>No es posible subir el archivo de imagen.</li><li>Solo se permiten archivos en formato .jpg, .jpeg o .png.</li></ul></div>");
						$this->refresh();
					}
				}else{
					saveImagePath($table,$imageAttrib,$oldImage,$codTable,$id);
				}
				$this->redirect(array('view','id'=>$model->RutDirector));
			}
		}
		
		$this->render('update',array(
			'model'=>$model,
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
		$dataProvider=new CActiveDataProvider('Perfildirectorcarrera');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Perfildirectorcarrera('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Perfildirectorcarrera']))
			$model->attributes=$_GET['Perfildirectorcarrera'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Perfildirectorcarrera the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Perfildirectorcarrera::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Perfildirectorcarrera $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='perfildirectorcarrera-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
