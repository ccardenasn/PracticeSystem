<?php
include_once('mainFunctions.php');
	
class HorarioController extends Controller
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
				'users'=>Horario::model()->getStudents(),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','createHorario','updateHorario','successTimeTable','successUpdateTimeTable'),
				//'users'=>array('@'),
				'users'=>Horario::model()->getStudents(),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				//'users'=>array('admin'),
				'users'=>Horario::model()->getStudents(),
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
		$model=new Horario;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Horario']))
		{
			$model->attributes=$_POST['Horario'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->CodHorario));
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

		if(isset($_POST['Horario']))
		{
			$model->attributes=$_POST['Horario'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->CodHorario));
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
	/*public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Horario');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}*/
	
	public function actionIndex()
    {
        $this->render('index');
    }
	
	public function actionCreateHorario()
	{
		$table = "horarioadmin";
		$codTable = "Estudiante_RutEstudiante";
		$cod = Yii::app()->user->name;
		
		$exist = contains($table,$codTable,$cod);
		
		if($exist == 0){
			$this->render('createHorario');
		}else{
			Yii::app()->user->setFlash('message',"<div id='errorMessage' class='flash-error'><p><strong>¡Advertencia!</strong></p><ul><li>El horario ha sido creado previamente.</li><li>Para modificar el horario haga click en la opción <strong>'Editar Horario'</strong>.</li></ul></div>");
			$this->redirect(array('index'));
		}
	}
	
	public function actionUpdateHorario()
	{
		$table = "horarioadmin";
		$codTable = "Estudiante_RutEstudiante";
		$cod = Yii::app()->user->name;
		
		$exist = contains($table,$codTable,$cod);
		
		if($exist != 0){
			$this->render('updateHorario');
		}else{
			Yii::app()->user->setFlash('message',"<div id='errorMessage' class='flash-error'><p><strong>¡Advertencia!</strong></p><ul><li>Aún no se ha creado el horario.</li><li>Para crear el horario haga click en la opción <strong>'Crear Horario'</strong>.</li></ul></div>");
			$this->redirect(array('index'));
		}
		
		
	}
	
	public function actionSuccessTimeTable()
	{
		Yii::app()->user->setFlash('message',"<div id='errorMessage' class='flash-success'><p><strong>¡Operación realizada!</strong></p><ul><li>Para editar un horario debe hacer clic en <strong>'Administración de Horarios'</strong>.</li></ul></div>");
		$this->render('index');
	}
	
	public function actionSuccessUpdateTimeTable()
	{
		$this->render('successUpdateTimeTable');
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Horario('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Horario']))
			$model->attributes=$_GET['Horario'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Horario the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Horario::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Horario $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='horario-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
