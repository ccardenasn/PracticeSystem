<?php
include_once('consulta.php');

class BitacorasesionController extends Controller
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

	public function actions() 
	{
		return array(
			'getRowForm' => array(
				'class' => 'ext.DynamicTabularForm.actions.GetRowForm',
				'view' => '_contact_form',
				'modelClass' => 'Clasebitacorasesion'
			),
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
				'actions'=>array('index','view', 'getRowForm','pdf'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('*'),
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
	public function actionCreate($id)
	{
		$model=new Bitacorasesion;
		$contacts = array(new Clasebitacorasesion);
		$exist=consultabitacora($id);
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Bitacorasesion']))
		{
			$model->attributes=$_POST['Bitacorasesion'];
			
			if($exist == 0)
			{
				if (isset($_POST['Clasebitacorasesion'])) {
				$contacts = array();
				foreach ($_POST['Clasebitacorasesion'] as $key => $value) {
					$contact = new Clasebitacorasesion('batchSave');
					$contact->attributes = $value;
					$contacts[] = $contact;
				}
			}

			$valid = $model->validate();
			foreach ($contacts as $contact) {
				$valid = $contact->validate() & $valid;
			}

			if ($valid) {
				$transaction = Yii::app()->db->beginTransaction();
				try {
					$model->save();
					$model->refresh();

					foreach ($contacts as $contact) {
						$contact->bitacorasesion_id = $model->id;
						$contact->save();
					}
					$transaction->commit();
				} 
				catch (Exception $e) {
					$transaction->rollback();
				}
				$this->redirect(array('view', 'id' => $model->id));
			}
			}else
			{
				Yii::app()->user->setFlash('success',"No se pueden crear mas bitácoras para esta planificación");
			}
			

			
		}

		$this->render('create',array(
			'model' => $model,
			'contacts' => $contacts
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
		$contacts = $model->clasebitacorasesion;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Bitacorasesion']))
		{
			$model->attributes=$_POST['Bitacorasesion'];

			if (isset($_POST['Clasebitacorasesion'])) {
				$contacts = array();
				foreach ($_POST['Clasebitacorasesion'] as $key => $value) {
					if ($value['updateType'] == DynamicTabularForm::UPDATE_TYPE_CREATE)
						$contacts[$key] = new Clasebitacorasesion();
					else if ($value['updateType'] == DynamicTabularForm::UPDATE_TYPE_UPDATE)
						$contacts[$key] = Clasebitacorasesion::model()->findByPk($value['id']);
					else if ($value['updateType'] == DynamicTabularForm::UPDATE_TYPE_DELETE) {
						$delete = Clasebitacorasesion::model()->findByPk($value['id']);
						if ($delete->delete()) {
							unset($contacts[$key]);
							continue;
						}
					}
					$contacts[$key]->attributes = $value;
				}
			}

			$valid = $model->validate();
			foreach ($contacts as $contact) {
				$valid = $contact->validate() & $valid;
			}

			if ($valid) {
				$transaction = $model->getDbConnection()->beginTransaction();
				try {
					$model->save();
					$model->refresh();

					foreach ($contacts as $contact) {
						$contact->bitacorasesion_id = $model->id;
						$contact->save();
					}
					$transaction->commit();
				} 
				catch (Exception $e) {
					$transaction->rollback();
				}
				$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('update',array(
			'model'=>$model,
			'contacts' => $contacts
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	
	public function actionDelete($id)
	{
		$querydoc="select count(*) from documentobitacora where bitacorasesion_id = '".$id."';";
		$exist=Yii::app()->db->createCommand($querydoc)->queryScalar();
		
		if($exist != 0)
		{
			$deldoc="delete from documentobitacora where bitacorasesion_id ='".$id."';";
			Yii::app()->db->createCommand($deldoc)->execute();
		}
		
		$delclase="delete from clasebitacorasesion where bitacorasesion_id ='".$id."';";
		Yii::app()->db->createCommand($delclase)->execute();
		
		$delbitacora="delete from bitacorasesion where id ='".$id."';";
		Yii::app()->db->createCommand($delbitacora)->execute();
		

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Bitacorasesion');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
	
	/*public function actionIndex()
    {
		$id = strtolower(Yii::app()->user->name);
		$count=Yii::app()->db->createCommand("select count(*) from bitacorasesion inner join planificacionclase on bitacorasesion.PlanificacionClase_CodPlanificacion = planificacionclase.CodPlanificacion where Estudiante_RutEstudiante = '".$id."';")->queryScalar();
		
		$sql="select bitacorasesion.id,bitacorasesion.fecha,bitacorasesion.actividades,bitacorasesion.aprendizaje,bitacorasesion.sentir,bitacorasesion.otro,bitacorasesion.PlanificacionClase_CodPlanificacion from bitacorasesion inner join planificacionclase on bitacorasesion.PlanificacionClase_CodPlanificacion = planificacionclase.CodPlanificacion where Estudiante_RutEstudiante = '".$id."';";
        
        $dataProvider=new CSqlDataProvider($sql, array(
			'totalItemCount'=>$count,
			'sort'=>array(
				'attributes'=>array(
					'id','fecha','actividades','aprendizaje','sentir','otro','PlanificacionClase_CodPlanificacion',
				),
			),
			'pagination'=>array(
				'pageSize'=>10,
			),
		));
            
        $this->render('index',array('dataProvider'=>$dataProvider));
    }*/

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Bitacorasesion('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Bitacorasesion']))
			$model->attributes=$_GET['Bitacorasesion'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Customer the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Bitacorasesion::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Customer $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='customer-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	public function actionPdf($id)
	{
		$this->render('pdf',array('model'=>$this->loadModel($id),));	
	}
}
