<?php
include_once('bitacoraFunctions.php');
include_once('mainFunctions.php');

class SecretariacarreraController extends Controller
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
				'actions'=>array('index','view'),
				//'users'=>array('*'),
				'users'=>Secretariacarrera::model()->getAdmins(),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				//'users'=>array('@'),
				'users'=>Secretariacarrera::model()->getAdmins(),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				//'users'=>array('@'),
				'users'=>Secretariacarrera::model()->getAdmins(),
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
		$model=new Secretariacarrera;
		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);
        $table = "secretariacarrera";
		$empty = isEmpty($table);
        
        if($empty == true){
            if(isset($_POST['Secretariacarrera'])){
                
                $model->attributes=$_POST['Secretariacarrera'];
                
                //se añade esta linea para agregar imagenes, se obtiene la ruta del campo rutaImagenAlojamiento
                $file=$model->ImagenSecretaria=CUploadedFile::getInstance($model,'ImagenSecretaria');
                
                if($model->save()){
                    if($file != null){
                        if($file->getExtensionName()=="jpg" or $file->getExtensionName()=="jpeg" or $file->getExtensionName()=="png"){
                            //se guarda la ruta de la imagen
                            $model->ImagenSecretaria->saveAs(Yii::getPathOfAlias("webroot")."/images/ImagenSecretaria/".$file->getName());
                        }else{
                            Yii::app()->user->setFlash('mensaje','Solo fotos JPG o PNG por favor');
                            $this->refresh();
                        }
                    }
                    $this->redirect(array('view','id'=>$model->RutSecretaria));
                }
            }
            
            $this->render('create',array(
                'model'=>$model,
            ));
        }else{
            Yii::app()->user->setFlash('message',"<div id='errorMessage' class='flash-error'><p><strong>¡Advertencia!</strong></p><ul><li>Solo se permite el ingreso de una secretaria de carrera.</li></ul></div>");
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
		
		$imageAttrib = "ImagenSecretaria";
		$table = "secretariacarrera";
		$codTable = "RutSecretaria";
		
		$oldImage = getImageModel($imageAttrib,$table,$codTable,$id);
		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);
		if(isset($_POST['Secretariacarrera']))
		{
			$model->attributes=$_POST['Secretariacarrera'];
			
			//se añade esta linea para agregar imagenes, se obtiene la ruta del campo rutaImagenAlojamiento
			$file=$model->ImagenSecretaria=CUploadedFile::getInstance($model,'ImagenSecretaria');
			
			if($model->save()){
				if($file != null){
					if($file->getExtensionName()=="jpg" or $file->getExtensionName()=="jpeg" or $file->getExtensionName()=="png"){
						//se guarda la ruta de la imagen
						$model->ImagenSecretaria->saveAs(Yii::getPathOfAlias("webroot")."/images/ImagenSecretaria/".$file->getName());
					}else{
						Yii::app()->user->setFlash('mensaje','Solo archivos pdf por favor');
						$this->refresh();
					}
				}else{
					saveImagePath($table,$imageAttrib,$oldImage,$codTable,$id);
				}
				$this->redirect(array('view','id'=>$model->RutSecretaria));
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
		$dataProvider=new CActiveDataProvider('Secretariacarrera');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Secretariacarrera('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Secretariacarrera']))
			$model->attributes=$_GET['Secretariacarrera'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Secretariacarrera the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Secretariacarrera::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Secretariacarrera $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='secretariacarrera-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
