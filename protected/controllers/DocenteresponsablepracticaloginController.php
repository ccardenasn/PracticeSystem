<?php

class DocenteresponsablepracticaloginController extends Controller
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
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Docenteresponsablepracticalogin;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Docenteresponsablepracticalogin']))
		{
			$model->attributes=$_POST['Docenteresponsablepracticalogin'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->RutResponsable));
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
		$model=$this->loadModel(Yii::app()->user->name);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Docenteresponsablepracticalogin']))
		{
			$model->attributes=$_POST['Docenteresponsablepracticalogin'];
            
            if($model->ClaveResponsable == $_POST['Docenteresponsablepracticalogin']['ConfirmClaveResponsable']){
                $model->EstadoResponsable = '1';
                if($model->save()){
                    $this->redirect(array('perfildocenteresponsablepractica/view','id'=>$model->RutResponsable));
                }
            }else{
                Yii::app()->user->setFlash('message',"<div id='errorMessage' class='flash-error'><p><strong>¡Advertencia!</strong></p><ul><li>Las contraseñas no coinciden.</li><li>Por favor ingrese la contraseña correctamente.</li></ul></div>");
                $this->refresh();
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
		$dataProvider=new CActiveDataProvider('Docenteresponsablepracticalogin');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Docenteresponsablepracticalogin('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Docenteresponsablepracticalogin']))
			$model->attributes=$_GET['Docenteresponsablepracticalogin'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Docenteresponsablepracticalogin the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Docenteresponsablepracticalogin::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Docenteresponsablepracticalogin $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='docenteresponsablepracticalogin-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
