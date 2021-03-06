<?php
include_once('bitacoraFunctions.php');
include_once('mainFunctions.php');

class DirectorcarreraController extends Controller
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
				'actions'=>array('index','view','pdf','exportpdf'),
				//'users'=>array('*'),
				'users'=>Directorcarrera::model()->getAdmins(),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				//'users'=>array('@'),
				'users'=>Directorcarrera::model()->getAdmins(),
			),
			/*array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('@'),
				'users'=>Directorcarrera::model()->getAdmins(),
			),*/
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin'),
				'users'=>Directorcarrera::model()->getAdmins(),
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
		$model=new Directorcarrera;
		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);
		$table = "directorcarrera";
		$empty = isEmpty($table);
		
		if($empty == true){
			
            if(isset($_POST['Directorcarrera'])){
				$model->attributes=$_POST['Directorcarrera'];
				
                $rnd = rand(1000,9999);
                $file=CUploadedFile::getInstance($model,'ImagenDirector');
                $fileName = "{$rnd}-{$file}";  // numero aleatorio  + nombre de archivo
                
                if($file != null){
                    $model->ImagenDirector = $fileName;
                }
				
				if($model->save()){
					if($file != null){
                        $file->saveAs(Yii::getPathOfAlias("webroot")."/images/ImagenDirector/".$fileName);
					}
					$this->redirect(array('view','id'=>$model->RutDirector));
				}
			}
			
			$this->render('create',array(
				'model'=>$model,
			));
		}else{
			Yii::app()->user->setFlash('message',"<div id='errorMessage' class='flash-error'><p><strong>¡Advertencia!</strong></p><ul><li>Solo se permite el ingreso de un solo director de carrera.</li></ul></div>");
			$this->redirect(array('index'));
		}
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		
		$imageAttrib = "ImagenDirector";
		$table = "directorcarrera";
		$codTable = "RutDirector";
		
		$oldImage = getImageModel($imageAttrib,$table,$codTable,$id);
		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['Directorcarrera']))
		{
			$model->attributes=$_POST['Directorcarrera'];
            
            $rnd = rand(1000,9999);
            $file=CUploadedFile::getInstance($model,'ImagenDirector');
            $fileName = "{$rnd}-{$file}";  // numero aleatorio  + nombre de archivo
            
            if($file != null){
                $model->ImagenDirector = $fileName;
            }
			
			if($model->save()){
				if($file != null){
                    $file->saveAs(Yii::getPathOfAlias("webroot")."/images/ImagenDirector/".$fileName);
				}else{
					saveImagePath($table,$imageAttrib,$oldImage,$codTable,$model->RutDirector);
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
		$dataProvider=new CActiveDataProvider('Directorcarrera');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Directorcarrera('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Directorcarrera']))
			$model->attributes=$_GET['Directorcarrera'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Directorcarrera the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Directorcarrera::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Directorcarrera $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='directorcarrera-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
    
    public function actionPdf($id)
	{
		$this->render('pdf',array('model'=>$this->loadModel($id),));	
	}
    
    public function actionExportPdf()
	{
		$this->render('exportpdf');
	}
}
