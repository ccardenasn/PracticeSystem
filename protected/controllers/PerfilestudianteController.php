<?php

class PerfilestudianteController extends Controller
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
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('update'),
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
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['Estudiante']))
		{
			$model->attributes=$_POST['Estudiante'];
			
			//se añade esta linea para agregar imagenes, se obtiene la ruta del campo rutaImagenAlojamiento
			$file=$model->ImagenEstudiante=CUploadedFile::getInstance($model,'ImagenEstudiante');
			
			if($model->save()){
				if($file != null){
				if($file->getExtensionName()=="jpg" or $file->getExtensionName()=="jpeg" or $file->getExtensionName()=="png")
				{
					//se guarda la ruta de la imagen
					$model->ImagenEstudiante->saveAs(Yii::getPathOfAlias("webroot")."/images/ImagenEstudiantes/".$file->getName());
				}else
				{
					Yii::app()->user->setFlash('mensaje','Solo archivos pdf por favor');
          			$this->refresh();
				}}
				$this->redirect(array('view','id'=>$model->RutEstudiante));
			}
		}
		
		$this->render('update',array(
			'model'=>$model,
		));
	}
	
	

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Estudiante the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Estudiante::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Estudiante $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='estudiante-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
