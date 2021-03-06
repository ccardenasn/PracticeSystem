<?php
include_once('bitacoraFunctions.php');
include_once('mainFunctions.php');

class PlanificacionclaseadministradorController extends Controller
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
				  'actions'=>array('index','view','pdf','exportpdf','exportplanningpdf','selectProfesorCreate','selectProfesorUpdate'),
				//'users'=>array('*'),
				'users'=>Planificacionclaseadministrador::model()->getAdmins(),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				//'users'=>array('@'),
				'users'=>Planificacionclaseadministrador::model()->getAdmins(),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','adminPlanificacionEstudiante'),
				//'users'=>array('@'),
				'users'=>Planificacionclaseadministrador::model()->getAdmins(),
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
		$model=new Planificacionclaseadministrador;
		$studentModel=$this->loadStudentModel($id);
		$practicaModel=$this->loadPracticaModel($studentModel->ConfiguracionPractica_CodPractica);

		$table = "planificacionclase";
		$codTable = "Estudiante_RutEstudiante";
		
		$totalSesiones = $practicaModel->NumeroSesionesPractica;
		$sesionesPlanificacion = contains($table,$codTable,$id);
		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation(array($model,$studentModel));

		if($sesionesPlanificacion < $totalSesiones){
			
			if(isset($_POST['Planificacionclaseadministrador'])){
				
				$model->attributes=$_POST['Planificacionclaseadministrador'];
				$studentModel->attributes=$_POST['Estudiante'];
				
				$model->CentroPractica_RBD = $studentModel->CentroPractica_RBD;
				$model->ProfesorGuiaCP_RutProfGuiaCP = $studentModel->ProfesorGuiaCP_RutProfGuiaCP;
				
                $rnd = rand(1000,9999);
                $file=CUploadedFile::getInstance($model,'DocumentoPlanificacion');
                $fileName = "{$rnd}-{$file}";  // numero aleatorio  + nombre de archivo
                
                if($file != null){
                    $model->DocumentoPlanificacion = $fileName;
                }
                
				if($model->save()){
                    if($file != null){
                        $file->saveAs(Yii::getPathOfAlias("webroot")."/documentsFiles/planificacionDocuments/".$fileName);
                    }
                    $this->redirect(array('view','id'=>$model->CodPlanificacion));
                }
					
			}
			
			$this->render('create',array(
				'model'=>$model,
				'studentModel'=>$studentModel,
			));
		}else{
			Yii::app()->user->setFlash('message',"<div id='errorMessage' class='flash-error'><p><strong>¡Advertencia!</strong></p><ul><li>Se han definido todas las planificaciones de acuerdo al total de sesiones correspondiente a práctica.</li></ul></div>");
			$this->redirect(array('estudiante/view','id'=>$id));
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
        
        $imageAttrib = "DocumentoPlanificacion";
		$table = "planificacionclase";
		$codTable = "CodPlanificacion";
		
		$oldImage = getImageModel($imageAttrib,$table,$codTable,$id);

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['Planificacionclaseadministrador']))
		{
			$model->attributes=$_POST['Planificacionclaseadministrador'];
            
            $rnd = rand(1000,9999);
            $file=CUploadedFile::getInstance($model,'DocumentoPlanificacion');
            $fileName = "{$rnd}-{$file}";  // numero aleatorio  + nombre de archivo
            
            if($file != null){
                $model->DocumentoPlanificacion = $fileName;
            }
            
			if($model->save()){
                if($file != null){
                    $file->saveAs(Yii::getPathOfAlias("webroot")."/documentsFiles/planificacionDocuments/".$fileName);
				}else{
					saveImagePath($table,$imageAttrib,$oldImage,$codTable,$model->CodPlanificacion);
				}
                $this->redirect(array('view','id'=>$model->CodPlanificacion));
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
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
    {
        //$uname = strtolower(Yii::app()->request->getQuery('id'));
        
        //$estudiante='Estudiante_RutEstudiante = :Estudiante_RutEstudiante';
        //$criteria=array('condition' => $estudiante,'params' => array(':Estudiante_RutEstudiante' => $uname),);
        //$option=array('criteria' => $criteria);
        $dataprovider=new CActiveDataProvider('Planificacionclaseadministrador');
            
        $this->render('index',array('dataProvider'=>$dataprovider));
    }

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Planificacionclaseadministrador('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Planificacionclaseadministrador']))
			$model->attributes=$_GET['Planificacionclaseadministrador'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	
	public function actionAdminPlanificacionEstudiante()
	{
		$model=new Planificacionclaseadministrador('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Planificacionclaseadministrador']))
			$model->attributes=$_GET['Planificacionclaseadministrador'];

		$this->render('adminPlanificacionEstudiante',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Planificacionclaseadministrador the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Planificacionclaseadministrador::model()->findByPk($id);
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
	 * @param Planificacionclaseadministrador $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='planificacionclaseadministrador-form')
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
	
	protected function gridBitacora($data,$row)
    { 
		$logbookData=Bitacorasesion::model()->findByAttributes(array('PlanificacionClase_CodPlanificacion'=>$data->CodPlanificacion));
		
        if($logbookData != null)
        {
            return 'Si';
        }
        else
             return 'No';
    }
	
	public static function getStatusImage($status) 
	{
		if ($strtolower($status) == 'Si') {
			return Yii::app()->request->baseUrl . '/images/AdminTemplates/okicon.png';
		} else {
			return Yii::app()->request->baseUrl . '/images/AdminTemplates/notokicon.png';
		}
	}
}
