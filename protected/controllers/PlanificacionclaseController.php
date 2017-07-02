<?php
include_once('consulta.php');
include_once('bitacoraFunctions.php');
include_once('mainFunctions.php');

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
				'actions'=>array('index','view','selectProfesorCreate','selectProfesorUpdate'),
				//'users'=>array('*'),
				'users'=>Planificacionclase::model()->getStudents(),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				//'users'=>array('@'),
				'users'=>Planificacionclase::model()->getStudents(),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				//'users'=>array('@'),
				'users'=>Planificacionclase::model()->getStudents(),
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
	/*public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}*/
    
    public function actionView($id)
	{   
        $rut=Yii::app()->user->name;
		$this->render('view',array(
			'model'=>$this->loadPlanningStudentModel($id,$rut),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
        $estudiantelogged=Yii::app()->user->name;
        
        $model=new Planificacionclase;
        
        $studentModel=$this->loadStudentModel($estudiantelogged);
		$practicaModel=$this->loadPracticaModel($studentModel->ConfiguracionPractica_CodPractica);

		$table = "planificacionclase";
		$codTable = "Estudiante_RutEstudiante";
		
		$totalSesiones = $practicaModel->NumeroSesionesPractica;
		$sesionesPlanificacion = contains($table,$codTable,$estudiantelogged);

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation(array($model,$studentModel));
		
        if($sesionesPlanificacion < $totalSesiones){
            
            if(isset($_POST['Planificacionclase'])){
                $model->attributes=$_POST['Planificacionclase'];
                $studentModel->attributes=$_POST['Estudiante'];
				
				$model->CentroPractica_RBD = $studentModel->CentroPractica_RBD;
				$model->ProfesorGuiaCP_RutProfGuiaCP = $studentModel->ProfesorGuiaCP_RutProfGuiaCP;
                
                if($model->save())
                    $this->redirect(array('view','id'=>$model->CodPlanificacion));
            }
            
            $this->render('create',array(
                'model'=>$model,
                'studentModel'=>$studentModel,
            ));
        }else{
            Yii::app()->user->setFlash('message',"<div id='errorMessage' class='flash-error'><p><strong>¡Advertencia!</strong></p><ul><li>Se han definido todas las planificaciones de acuerdo al total de sesiones correspondiente a práctica.</li></ul></div>");
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
		$this->performAjaxValidation($model);

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
		$planningRut = findPlanningRut($id);
		$existLogBook = containsLogBook($id);

		if($existLogBook != 0){
			$idLogBook = getIdLogBook($id);
			$existClaseLogBook = containsClaseLogBook($idLogBook);
			
			if($existClaseLogBook != 0){
				deleteLogBookSesion($idLogBook);
			}
			
			deleteLogBook($id);
		}
		
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin','id'=>$planningRut));
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
    
    public function loadPlanningStudentModel($id,$rut)
	{
		//$model=Planificacionclase::model()->findByPk($id);
        $model=Planificacionclase::model()->findByAttributes(array('CodPlanificacion'=>$id,'Estudiante_RutEstudiante'=>$rut));
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
    
    public function loadStudentModel($id)
	{
		$model=Estudiante::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
	
	public function loadPracticaModel($id)
	{
		$model=Configuracionpractica::model()->findByPk($id);
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
    
    public function actionSelectProfesorCreate()
	{
		$id_uno = $_POST['Estudiante']['CentroPractica_RBD'];
		$lista = Profesorguiacp::model()->findAll('CentroPractica_RBD = :id_uno',array(':id_uno'=>$id_uno));
		$lista = CHtml::listData($lista,'RutProfGuiaCP','NombreProfGuiaCP');
		
		echo CHtml::tag('option',array('value'=>''),'Seleccione',true);
		
		foreach($lista as $valor => $descripcion){
			echo CHtml::tag('option',array('value'=>$valor),CHtml::encode($descripcion),true);
		}
	}
    
    public function actionSelectProfesorUpdate()
	{
		$id_uno = $_POST['Planificacionclaseadministrador']['CentroPractica_RBD'];
		$lista = Profesorguiacp::model()->findAll('CentroPractica_RBD = :id_uno',array(':id_uno'=>$id_uno));
		$lista = CHtml::listData($lista,'RutProfGuiaCP','NombreProfGuiaCP');
		
		echo CHtml::tag('option',array('value'=>''),'Seleccione',true);
		
		foreach($lista as $valor => $descripcion){
			echo CHtml::tag('option',array('value'=>$valor),CHtml::encode($descripcion),true);
		}
	}
}
