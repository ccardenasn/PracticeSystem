<?php
include_once('graficoB.php');

class EstadisticasController extends Controller
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
				'actions'=>array('index','view','graficar','graph'),
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
	public function actionCreate()
	{
		$model=new Estadisticas;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Estadisticas']))
		{
			$model->attributes=$_POST['Estadisticas'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->RBD));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
    
    /*public function actionCreate()
	{
		$model=new Estadisticas;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
        $mainoptionsA=array('7701');
		
        if(isset($_POST['Estadisticas']))
		{
			//$model->attributes=$_POST['Estadisticas'];
			//if($model->save())
            //$this->redirect(array('create','id'=>$model->RBD));
            $center=$model->NombreCentroPractica;
            
            $maindataA=loadGraphB($center);
            
            $graphdataA=listDataB($maindataA);
        
            $mainoptionsA=graphOptionsB($graphdataA);
            
            
            //$this->redirect(array('create','options'=>$mainoptionsA));
		}

		$this->render('create',array('model'=>$model,'options'=>$mainoptionsA));
	}*/

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

		if(isset($_POST['Estadisticas']))
		{
			$model->attributes=$_POST['Estadisticas'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->RBD));
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
		$dataProvider=new CActiveDataProvider('Estadisticas');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Estadisticas('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Estadisticas']))
			$model->attributes=$_GET['Estadisticas'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Estadisticas the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Estadisticas::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Estadisticas $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='estadisticas-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	public function actionGraficar()
	{
		$id = $_POST['RBD'];
		$arr = array();
		$result = array();

		$sql = "select * from graph_data where idcentro = $id";
		$q	 = mysql_query($sql);
		$j = 0;
		
		while($row = mysql_fetch_assoc($q))
		{
			$arr['data'][] = array($row['nombrepractica'],$row['numero']);
		}
		
		array_push($result,$arr);
		
		print json_encode($result, JSON_NUMERIC_CHECK);
		
		mysql_close($con);
	}
	
	public function actionUpdateAjax()
    {
		$id = Yii::app()->request->getParam('RBD');
		//$id = $_POST['Centropractica']['RBD'];
		//echo $id;
		$arr = array();
		$result = array();	
				
		$sql = "select * from graph_data where idcentro = '".$id."';";
		$query =Yii::app()->db->createCommand($sql)->queryAll();
				
		foreach($query as $row){
			$arr['data'][] = array($row['nombrepractica'],$row['numero']);
		}
				
		array_push($result,$arr);
		//print_r(json_encode($result, JSON_NUMERIC_CHECK));
		CJSON::encode($result);
    }
	
	public function actionGraph(){
		$baseUrl = Yii::app()->baseUrl; 
		$this->render($baseUrl.'/chartsformchange/index');
	}
}


