<?php
include_once('mainFunctions.php');

class GraphdataController extends Controller
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
				'actions'=>array('index','view','graph_a','graph_c','graph_d','graph_e','graph_f','pdf','exportImage','exportText'),
				//'users'=>array('*'),
				'users'=>Graphdata::model()->getAdmins(),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin'),
				//'users'=>array('@'),
				'users'=>Graphdata::model()->getAdmins(),
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
	 * Lists all models.
	 */
	public function actionIndex()
    {
        $this->render('index');
    }
	
	public function actionGraph_a()
    {
		$table = "estudiante";
		
		$empty = isEmpty($table);
		
		if($empty == false){
			$this->render('graph_a_main');
		}else{
			Yii::app()->user->setFlash('message',"<div id='errorMessage' class='flash-error'><p><strong>¡Advertencia!</strong></p><ul><li>No se puede visualizar el gráfico en este momento.</li><li>Por favor verifique que se ha agregado información de <strong>Estudiantes</strong>.</li></ul></div>");
			$this->redirect(array('index'));
		}
    }
	
	public function actionGraph_c()
    {
		$table = "clasebitacorasesion";
		
		$empty = isEmpty($table);
		
		if($empty == false){
			$this->render('graph_c_main');
		}else{
			Yii::app()->user->setFlash('message',"<div id='errorMessage' class='flash-error'><p><strong>¡Advertencia!</strong></p><ul><li>No se puede visualizar el gráfico en este momento.</li><li>Por favor verifique que se ha agregado información de <strong>Bitácoras</strong>.</li></ul></div>");
			$this->redirect(array('index'));
		}
		
        
    }
	
	public function actionGraph_d()
    {
		$table = "estudiante";
		
		$empty = isEmpty($table);
		
		if($empty == false){
			$this->render('graph_d_main');
		}else{
			Yii::app()->user->setFlash('message',"<div id='errorMessage' class='flash-error'><p><strong>¡Advertencia!</strong></p><ul><li>No se puede visualizar el gráfico en este momento.</li><li>Por favor verifique que se ha agregado información de <strong>Estudiantes</strong>.</li></ul></div>");
			$this->redirect(array('index'));
		}
    }
	
	public function actionGraph_e()
    {
		$table = "planificacionclase";
		
		$empty = isEmpty($table);
		
		if($empty == false){
			$this->render('graph_e_main');
		}else{
			Yii::app()->user->setFlash('message',"<div id='errorMessage' class='flash-error'><p><strong>¡Advertencia!</strong></p><ul><li>No se puede visualizar el gráfico en este momento.</li><li>Por favor verifique que se ha agregado información de <strong>Planificaciones</strong>.</li></ul></div>");
			$this->redirect(array('index'));
		}
    }
	
	public function actionGraph_f()
    {	
		$table = "profesorguiacp";
		
		$empty = isEmpty($table);
		
		if($empty == false){
			$this->render('graph_f_main');
		}else{
			Yii::app()->user->setFlash('message',"<div id='errorMessage' class='flash-error'><p><strong>¡Advertencia!</strong></p><ul><li>No se puede visualizar el gráfico en este momento.</li><li>Por favor verifique que se ha agregado información de <strong>Profesores Guía CP</strong>.</li></ul></div>");
			$this->redirect(array('index'));
		}
    }

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return GraphData the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=GraphData::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param GraphData $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='graph-data-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	public function actionExportImage()
	{
		$directorio=Yii::getPathOfAlias("webroot")."/graphProcess/graphInfo/";
		$data = $_REQUEST['base64data'];
		$image = explode('base64,',$data);
		file_put_contents($directorio."myImage.png", base64_decode($image[1]));
		//$this->rendirect('pdf');
	}
	
	public function actionExportText()
	{
		$directorio=Yii::getPathOfAlias("webroot")."/graphProcess/graphInfo/";
		$title = $_REQUEST['title']; 
		$data = $_REQUEST['textDesc'];
		$colA = $_REQUEST['col1'];
		$colB = $_REQUEST['col2'];
		//$image = explode('base64,',$data);
		file_put_contents($directorio."descData.txt",$title."\n".$colA."\n".$colB."\n".trim($data));
		//$this->rendirect('pdf');
	}
	
	public function actionPdf()
	{
		$this->render('pdf');	
	}
}
