<?php

class PlanificacionclaseresponsableController extends Controller
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
				'actions'=>array('index','view','pdf','exportpdf','exportplanningpdf'),
				//'users'=>array('*'),
				'users'=>Planificacionclaseresponsable::model()->getResponsable(),
			),
			/*array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),*/
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('update'),
				//'users'=>array('@'),
				'users'=>Planificacionclaseresponsable::model()->getResponsable(),
			),
			/*array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('@'),
			),*/
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','adminPlanificacionEstudianteResponsable'),
				//'users'=>array('@'),
				'users'=>Planificacionclaseresponsable::model()->getResponsable(),
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
		$model=new Planificacionclaseresponsable;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Planificacionclaseresponsable']))
		{
			$model->attributes=$_POST['Planificacionclaseresponsable'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->CodPlanificacion));
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

		if(isset($_POST['Planificacionclaseresponsable']))
		{
			$model->attributes=$_POST['Planificacionclaseresponsable'];
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
        $loggedResponsable=Yii::app()->user->name;
        
        $practicaRespModel=DocenteresponsablepracticaHasConfiguracionpractica::model()->findAll('DocenteResponsablePractica_RutResponsable=?',array($loggedResponsable));
        
        $practicaArr = array();
        
        $criteria = new CDbCriteria();
        $criteria->alias = 'Planificacionclaseresponsable';
        $criteria->select ='Planificacionclaseresponsable.CodPlanificacion,Planificacionclaseresponsable.SesionInformada,Planificacionclaseresponsable.Estudiante_RutEstudiante,Planificacionclaseresponsable.CentroPractica_RBD,Planificacionclaseresponsable.ProfesorGuiaCP_RutProfGuiaCP,Planificacionclaseresponsable.Curso,Planificacionclaseresponsable.ConfiguracionPractica_CodPractica,Planificacionclaseresponsable.Fecha';
        
        $c2 = new CDbCriteria;
        $c2->alias = 'Planificacionclaseresponsable';
        foreach ($practicaRespModel as $txt) { 
            $c2->compare('Planificacionclaseresponsable.ConfiguracionPractica_CodPractica', $txt->ConfiguracionPractica_CodPractica, true, 'OR');
        }
        
        $criteria->mergeWith($c2); // Merge $c2 into $c1
        
		$dataProvider=new CActiveDataProvider('Planificacionclaseresponsable',array('criteria'=>$criteria));
		
        
        if($practicaRespModel == null){
            Yii::app()->user->setFlash('message',"<div id='errorMessage' class='flash-error'><p><strong>¡Advertencia!</strong></p><ul><li>Acceso restringido.</li><li>No se han encontrado prácticas asociadas.</li></ul></div>");
            $this->redirect(array('perfildocenteresponsablepractica/view','id'=>$loggedResponsable));
        }else{
            $this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
        }
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Planificacionclaseresponsable('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Planificacionclaseresponsable']))
			$model->attributes=$_GET['Planificacionclaseresponsable'];

        $loggedResponsable=Yii::app()->user->name;
        
        $practicaRespModel=DocenteresponsablepracticaHasConfiguracionpractica::model()->findAll('DocenteResponsablePractica_RutResponsable=?',array($loggedResponsable));
        
        if($practicaRespModel == null){
            Yii::app()->user->setFlash('message',"<div id='errorMessage' class='flash-error'><p><strong>¡Advertencia!</strong></p><ul><li>Acceso restringido.</li><li>No se han encontrado prácticas asociadas.</li></ul></div>");
            $this->redirect(array('perfildocenteresponsablepractica/view','id'=>$loggedResponsable));
        }else{
            $this->render('admin',array(
                'model'=>$model,
            ));
        }
	}
    
    public function actionAdminPlanificacionEstudianteResponsable()
	{
        $id=Yii::app()->request->getQuery('id');
        $existData = false;
        $loggedResponsable=Yii::app()->user->name;
        $practicaRespModel=DocenteresponsablepracticaHasConfiguracionpractica::model()->findAll('DocenteResponsablePractica_RutResponsable=?',array($loggedResponsable));
        
        $practicasDrop = array();
        
        foreach($practicaRespModel as $practica){
            $practicasDrop[$practica->configuracionpracticas->CodPractica]=$practica->configuracionpracticas->CodPractica;
        }
        
        $estudianteRespModel = Estudianteresponsable::model()->findAllByAttributes(array('ConfiguracionPractica_CodPractica'=>$practicasDrop));
        
        foreach($estudianteRespModel as $estudiante){
            if(strcmp($estudiante->RutEstudiante,$id) == 0){
                $existData = true;
            }
        }
        
        if($existData == true){
            $model=new Planificacionclaseresponsable('search');
            $model->unsetAttributes();  // clear any default values
            
            if(isset($_GET['Planificacionclaseresponsable']))
                $model->attributes=$_GET['Planificacionclaseresponsable'];
            
            $this->render('adminPlanificacionEstudianteResponsable',array(
                'model'=>$model,
            ));
        }else{
            Yii::app()->user->setFlash('message',"<div id='errorMessage' class='flash-error'><p><strong>¡Advertencia!</strong></p><ul><li>Operación no permitida.</li></ul></div>");
			$this->redirect(array('estudianteresponsable/index'));
        }
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Planificacionclaseresponsable the loaded model
	 * @throws CHttpException
	 */
	/*public function loadModel($id)
	{
		$model=Planificacionclaseresponsable::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}*/
    
    public function loadModel($id)
	{
        //$existData = false;
        $model = null; 
        $loggedResponsable=Yii::app()->user->name;
        $practicaRespModel=DocenteresponsablepracticaHasConfiguracionpractica::model()->findAll('DocenteResponsablePractica_RutResponsable=?',array($loggedResponsable));
        
        $practicasDrop = array();
        
        foreach($practicaRespModel as $practica){
            $practicasDrop[$practica->configuracionpracticas->CodPractica]=$practica->configuracionpracticas->CodPractica;
        }
        
        $estudianteRespModel = Estudianteresponsable::model()->findAllByAttributes(array('ConfiguracionPractica_CodPractica'=>$practicasDrop));
        
        $planningRespModel = Planificacionclaseresponsable::model()->findByAttributes(array('CodPlanificacion'=>$id));
        
        foreach($estudianteRespModel as $estudiante){
            if(strcmp($estudiante->RutEstudiante,$planningRespModel->Estudiante_RutEstudiante) == 0){
                //$existData = true;
                $model=Planificacionclaseresponsable::model()->findByPk($id);
            }
        }
        
		//$model=Planificacionclaseresponsable::model()->findByPk($id);
		if($model===null){
            //throw new CHttpException(404,'The requested page does not exist.');
            Yii::app()->user->setFlash('message',"<div id='errorMessage' class='flash-error'><p><strong>¡Advertencia!</strong></p><ul><li>Operación no permitida.</li></ul></div>");
			$this->redirect(array('index'));
        }
			
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Planificacionclaseresponsable $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='planificacionclaseresponsable-form')
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
    
    public function actionExportPlanningPdf()
	{
		$this->render('exportplanningpdf');
	}
}
