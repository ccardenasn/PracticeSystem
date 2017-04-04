<?php

class ProfesorguiacpmainController extends Controller
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
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
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
	/*public function actionCreate()
	{
		$model=new Profesorguiacp;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Profesorguiacp']))
		{
			$model->attributes=$_POST['Profesorguiacp'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->RutProfGuiaCP));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}*/
	
	public function actionCreate()
	{
		$model=new Profesorguiacp;
		
		if(isset($_POST['submit_row'])){ 
	
	$rut=$_POST['RutProfGuiaCP'];
	$nombre=$_POST['NombreProfGuiaCP'];
	$curso=$_POST['CursoProfGuiaCP'];
	$profesorjefe=$_POST['ProfesorJefeProfGuiaCP'];
	$correo=$_POST['MailProfGuiaCP'];
	$telefono=$_POST['TelefonoProfGuiaCP'];
	$celular=$_POST['CelularProfGuiaCP'];
	$centro=$_POST['CentroPractica_RBD'];
	//$imagen=$_FILES['ImagenProfGuiaCP'];
			
	$directorio=Yii::getPathOfAlias("webroot")."/images/ImagenProfesoresGuiaCP";
			
	for($i=0;$i<count($rut);$i++){
		if($rut[$i]!="" && $nombre[$i]!="" && $curso[$i]!="" && $curso[$i]!="" && $profesorjefe[$i]!="" && $correo[$i]!="" && $telefono[$i]!="" && $celular[$i]!="" && $centro[$i]!="" ){
			
			$imagen=$_FILES['ImagenProfGuiaCP']['name'][$i];
			move_uploaded_file ($_FILES['ImagenProfGuiaCP']['tmp_name'][$i],$directorio."/".$imagen);
			
			$query="insert into profesorguiacp values('$rut[$i]','$nombre[$i]','$curso[$i]','$profesorjefe[$i]','$correo[$i]','$telefono[$i]','$celular[$i]','$centro[$i]','$imagen')";
			Yii::app()->db->createCommand($query)->execute();
			
				 
		}
		
	}
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
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Profesorguiacp']))
		{
			$model->attributes=$_POST['Profesorguiacp'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->RutProfGuiaCP));
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
		$dataProvider=new CActiveDataProvider('Profesorguiacp');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Profesorguiacp('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Profesorguiacp']))
			$model->attributes=$_GET['Profesorguiacp'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Profesorguiacp the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Profesorguiacp::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Profesorguiacp $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='profesorguiacp-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}