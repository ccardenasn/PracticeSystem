<?php
include_once('consulta.php');

class PlanificacionclaseController extends Controller
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
        $estudiantelogged=Yii::app()->user->name;
        $comp=consultaplanificacion($estudiantelogged);
        
        $model=new Planificacionclase;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		if(isset($_POST['Planificacionclase']))
		{
			$model->attributes=$_POST['Planificacionclase'];
            
            if($comp[0] < $comp[1]){
                if($model->save())
				$this->redirect(array('view','id'=>$model->CodPlanificacion));
            }else{
                Yii::app()->user->setFlash('success',"No se pueden crear mas sesiones!!!");
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

		if(isset($_POST['Planificacionclase']))
		{
			$model->attributes=$_POST['Planificacionclase'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->CodPlanificacion));
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
	/*public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}*/
	
	public function actionDelete($id)
	{
		$queryplan="select id from bitacorasesion where PlanificacionClase_CodPlanificacion = '".$id."'; ";
		$plan=Yii::app()->db->createCommand($queryplan)->queryScalar();
			
		$querydoc="select count(*) from documentobitacora where bitacorasesion_id = '".$plan."';";
		$docexist=Yii::app()->db->createCommand($querydoc)->queryScalar();
		
		if($docexist != 0)
		{
			$deldoc="delete from documentobitacora where bitacorasesion_id ='".$plan."';";
			Yii::app()->db->createCommand($deldoc)->execute();
		}
		
		$queryclase="select count(*) from clasebitacorasesion where bitacorasesion_id = '".$plan."';";
		$claseexist=Yii::app()->db->createCommand($queryclase)->queryScalar();
		
		if($claseexist != 0)
		{
			$delclase="delete from clasebitacorasesion where bitacorasesion_id ='".$plan."';";
			Yii::app()->db->createCommand($delclase)->execute();
			
			$delbitacora="delete from bitacorasesion where id ='".$plan."';";
			Yii::app()->db->createCommand($delbitacora)->execute();
		}
		
		$delplan="delete from planificacionclase where CodPlanificacion ='".$id."';";
		Yii::app()->db->createCommand($delplan)->execute();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
    {
        $uname = strtolower(Yii::app()->user->name);
        
        $estudiante='Estudiante_RutEstudiante = :Estudiante_RutEstudiante';
        $criteria=array('condition' => $estudiante,'params' => array(':Estudiante_RutEstudiante' => $uname),);
        $option=array('criteria' => $criteria);
        $dataprovider=new CActiveDataProvider('planificacionclase',$option);
            
        $this->render('index',array('dataProvider'=>$dataprovider));
    }

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Planificacionclase('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Planificacionclase']))
			$model->attributes=$_GET['Planificacionclase'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Planificacionclase the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Planificacionclase::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Planificacionclase $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='planificacionclase-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
