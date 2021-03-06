<?php
include_once('semestreFunctions.php');

class SemestreController extends Controller
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
				'users'=>Semestre::model()->getAdmins(),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				//'users'=>array('@'),
				'users'=>Semestre::model()->getAdmins(),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				//'users'=>array('@'),
				'users'=>Semestre::model()->getAdmins(),
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
		$model=new Semestre;

        $query = "select codCarrera from carrera;";
        $idCarrera=Yii::app()->db->createCommand($query)->queryScalar();
        $carreraData=Carrera::model()->find('codCarrera=?',array($idCarrera));
		
		$this->performAjaxValidation($model);
		
		if($carreraData != null){
			$semestersNumber = $carreraData->SemestresCarrera;
			
			// Uncomment the following line if AJAX validation is needed
			
			
			if(isset($_POST['Semestre'])){
				$model->attributes=$_POST['Semestre'];
				
				if($model->save()){
					$semestersNumber = $semestersNumber + 1;
					$carreraData->SemestresCarrera = $semestersNumber;
					$carreraData->save();
					$this->redirect(array('view','id'=>$model->CodSemestre));
				}
			}
			
			$this->render('create',array(
				'model'=>$model,
			));
		
		}else{
			Yii::app()->user->setFlash('message',"<div id='errorMessage' class='flash-error'><p><strong>¡Advertencia!</strong></p><ul><li>No se pueden añadir semestres en este momento.</li><li>Por favor verifique que se ha agregado información de <strong>Universidad</strong>.</li></ul></div>");
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

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Semestre']))
		{
			$model->attributes=$_POST['Semestre'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->CodSemestre));
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
		$practicaData=Configuracionpractica::model()->find('Semestre_CodSemestre=?',array($id));
		
		if($practicaData == null){
			$existSubjects = containsSubjects($id);
			
			if($existSubjects != 0){
				$semesterSubjects = getSemesterSubjects($id);
				
				for($i=0;$i<count($semesterSubjects);$i++){
					$remainSubject = $semesterSubjects[$i]['NombreAsignatura'];
					
					$existTimeTableSubject = containsTimeTableSubject($remainSubject);
					
					if($existTimeTableSubject != 0){
						deleteTimetableSubjects($remainSubject);
					}
				}
				deleteSubjects($id);
			}
			
			$this->loadModel($id)->delete();
			
			$query = "select codCarrera from carrera;";
			$idCarrera=Yii::app()->db->createCommand($query)->queryScalar();
			$carreraData=Carrera::model()->find('codCarrera=?',array($idCarrera));
			
			if($carreraData != null){
				$semestersNumber = $carreraData->SemestresCarrera;
				$semestersNumber = $semestersNumber - 1;
				$carreraData->SemestresCarrera = $semestersNumber;
				$carreraData->save(); 
			}
			
			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}else{
			Yii::app()->user->setFlash('message',"<div id='errorMessage' class='flash-error'><p><strong>¡No es posible eliminar!</strong></p><ul><li>Hay prácticas asociadas a este semestre.</li></ul></div>");
			//$this->refresh();
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array("view&id=".$id.""));
		}
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Semestre');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Semestre('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Semestre']))
			$model->attributes=$_GET['Semestre'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Semestre the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Semestre::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Semestre $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='semestre-form')
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
