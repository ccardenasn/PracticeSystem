<?php
include_once('bitacoraFunctions.php');
include_once('mainFunctions.php');
include_once('FunSendMail.php');

class DocentecoordinadorpracticasController extends Controller
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
				'users'=>Docentecoordinadorpracticas::model()->getAdmins(),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				//'users'=>array('@'),
				'users'=>Docentecoordinadorpracticas::model()->getAdmins(),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				//'users'=>array('@'),
				'users'=>Docentecoordinadorpracticas::model()->getAdmins(),
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
		$model=new Docentecoordinadorpracticas;
		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);
		$table = "docentecoordinadorpracticas";
		$empty = isEmpty($table);
		
		if($empty == true){
			
			if(isset($_POST['Docentecoordinadorpracticas'])){
				
				$model->attributes=$_POST['Docentecoordinadorpracticas'];
                
                $randomPassword = rand(0,9999);
                $model->ClaveResponsable = $randomPassword;
                $model->EstadoCoordinador = '0';
                
                $rnd = rand(0,9999);
                $file=CUploadedFile::getInstance($model,'ImagenCoordinador');
                $fileName = "{$rnd}-{$file}";  // numero aleatorio  + nombre de archivo
                
                if($file != null){
                    $model->ImagenCoordinador = $fileName;
                }
                
				$empty = isEmpty($table);
				
				if($model->save()){
					
					if($file != null){
						if($file->getExtensionName()=="jpg" or $file->getExtensionName()=="jpeg" or $file->getExtensionName()=="png"){
							
							$file->saveAs(Yii::getPathOfAlias("webroot")."/images/ImagenCoordinador/".$fileName);
						}else{
							Yii::app()->user->setFlash('message',"<div id='errorMessage' class='flash-error'><p><strong>¡Advertencia!</strong></p><ul><li>No es posible subir el archivo de imagen.</li><li>Solo se permiten archivos en formato .jpg, .jpeg o .png.</li></ul></div>");
							$this->refresh();
						}
					}
                    sendPassword($model->MailCoordinador,"Nuevo Usuario",$model->RutCoordinador,$model->NombreCoordinador,$model->ClaveCoordinador);
					$this->redirect(array('view','id'=>$model->RutCoordinador));
				}
			}
			
			$this->render('create',array(
				'model'=>$model,
			));
		
		}else{
			Yii::app()->user->setFlash('message',"<div id='errorMessage' class='flash-error'><p><strong>¡Advertencia!</strong></p><ul><li>Solo se permite el ingreso de un solo coordinador de carrera.</li></ul></div>");
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
		
		$imageAttrib = "ImagenCoordinador";
		$table = "docentecoordinadorpracticas";
		$codTable = "RutCoordinador";
		
		$oldImage = getImageModel($imageAttrib,$table,$codTable,$id);
		
		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['Docentecoordinadorpracticas']))
		{
			$model->attributes=$_POST['Docentecoordinadorpracticas'];
			
            $rnd = rand(0,9999);
            $file=CUploadedFile::getInstance($model,'ImagenCoordinador');
            $fileName = "{$rnd}-{$file}";
            
            if($file != null){
                $model->ImagenCoordinador = $fileName;
            }
            
			if($model->save()){
				if($file != null){
					if($file->getExtensionName()=="jpg" or $file->getExtensionName()=="jpeg" or $file->getExtensionName()=="png"){
						//se guarda la ruta de la imagen
						$file->saveAs(Yii::getPathOfAlias("webroot")."/images/ImagenCoordinador/".$fileName);
					}else{
						Yii::app()->user->setFlash('message',"<div id='errorMessage' class='flash-error'><p><strong>¡Advertencia!</strong></p><ul><li>No es posible subir el archivo de imagen.</li><li>Solo se permiten archivos en formato .jpg, .jpeg o .png.</li></ul></div>");
						$this->refresh();
					}
				}else{
					saveImagePath($table,$imageAttrib,$oldImage,$codTable,$model->RutCoordinador);
				}
				$this->redirect(array('view','id'=>$model->RutCoordinador));
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
		$dataProvider=new CActiveDataProvider('Docentecoordinadorpracticas');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Docentecoordinadorpracticas('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Docentecoordinadorpracticas']))
			$model->attributes=$_GET['Docentecoordinadorpracticas'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Docentecoordinadorpracticas the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Docentecoordinadorpracticas::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Docentecoordinadorpracticas $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='docentecoordinadorpracticas-form')
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
