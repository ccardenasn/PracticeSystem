<?php
include_once('bitacoraFunctions.php');
include_once('mainFunctions.php');

class DirectorcpController extends Controller
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
				'users'=>Directorcp::model()->getAdmins(),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				//'users'=>array('@'),
				'users'=>Directorcp::model()->getAdmins(),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				//'users'=>array('@'),
				'users'=>Directorcp::model()->getAdmins(),
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
		$model=new Directorcp;
		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);
		
        $empty = isEmpty("centropractica");
		
        if($empty == false){
            
            if(isset($_POST['Directorcp'])){
                
                $model->attributes=$_POST['Directorcp'];
                
                $rnd = rand(1000,9999);
                $file=CUploadedFile::getInstance($model,'ImagenDirectorCP');
                $fileName = "{$rnd}-{$file}";
                
                if($file != null){
                    $model->ImagenDirectorCP = $fileName;
                }
                
                if($model->save()){
                    if($file != null){
                        $file->saveAs(Yii::getPathOfAlias("webroot")."/images/ImagenDirectoresCP/".$fileName);
                    }
                    $this->redirect(array('view','id'=>$model->RutDirectorCP));
                }
            }
            
            $this->render('create',array(
                'model'=>$model,
            ));
        
        }else{
            Yii::app()->user->setFlash('message',"<div id='errorMessage' class='flash-error'><p><strong>¡Advertencia!</strong></p><ul><li>No se pueden añadir Director CP en este momento.</li><li>Por favor verifique que se ha agregado información de <strong>Centros de Práctica</strong>.</li></ul></div>");
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
		
		$imageAttrib = "ImagenDirectorCP";
		$table = "directorcp";
		$codTable = "RutDirectorCP";
		
		$oldImage = getImageModel($imageAttrib,$table,$codTable,$id);
		
		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['Directorcp']))
		{
			$model->attributes=$_POST['Directorcp'];
			
			$rnd = rand(1000,9999);
            $file=CUploadedFile::getInstance($model,'ImagenDirectorCP');
            $fileName = "{$rnd}-{$file}";
            
            if($file != null){
                $model->ImagenDirectorCP = $fileName;
            }
            
			if($model->save()){
				if($file != null){
                    $file->saveAs(Yii::getPathOfAlias("webroot")."/images/ImagenDirectoresCP/".$fileName);
				}else{
					saveImagePath($table,$imageAttrib,$oldImage,$codTable,$model->RutDirectorCP);
				}
				$this->redirect(array('view','id'=>$model->RutDirectorCP));
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
		$dataProvider=new CActiveDataProvider('Directorcp');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Directorcp('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Directorcp']))
			$model->attributes=$_GET['Directorcp'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Directorcp the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Directorcp::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Directorcp $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='directorcp-form')
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
