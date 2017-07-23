<?php
include_once('bitacoraFunctions.php');
include_once('mainFunctions.php');

class BitacorasesionadminController extends Controller
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
				'actions'=>array('index','view','viewPlanificacionBitacora','pdf','exportpdf'),
				//'users'=>array('*'),
				'users'=>Bitacorasesionadmin::model()->getAdmins(),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				//'users'=>array('@'),
				'users'=>Bitacorasesionadmin::model()->getAdmins(),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				//'users'=>array('@'),
				'users'=>Bitacorasesionadmin::model()->getAdmins(),
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
	
	public function actionViewPlanificacionBitacora($id)
	{
		$table = "bitacorasesion";
		$codTable = "PlanificacionClase_CodPlanificacion";
		$exist = contains($table,$codTable,$id);
		
		if($exist != 0){
			$bitacoraUser=Bitacorasesion::model()->find('PlanificacionClase_CodPlanificacion=?',array($id));
			$this->render('viewPlanificacionBitacora',array(
				'model'=>$this->loadModel($bitacoraUser->CodBitacora),
			));
		}else{
			Yii::app()->user->setFlash('message',"<div id='errorMessage' class='flash-error'><p><strong>¡Advertencia!</strong></p><ul><li>Aun no se ha creado una bitácora para esta planificación.</li><li>Para añadir una bitácora haga click en <strong>'Crear Bitácora'</strong>.</li></ul></div>");
			$this->redirect(array('planificacionclaseadministrador/view','id'=>$id));
		}
		
		
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate($id)
	{
		$model=new Bitacorasesionadmin;
		
		$table = "bitacorasesion";
		$codTable = "PlanificacionClase_CodPlanificacion";
		$exist = contains($table,$codTable,$id);
		
		if($exist == 0){
			if(isset($_POST['Bitacorasesionadmin'])){
				
				$model->attributes=$_POST['Bitacorasesionadmin'];
                
                $rnd = rand(1000,9999);
                $file=CUploadedFile::getInstance($model,'DocumentoBitacora');
                $fileName = "{$rnd}-{$file}";  // numero aleatorio  + nombre de archivo
                
                if($file != null){
                    $model->DocumentoBitacora = $fileName;
                }
				
				if($model->save()){
					if($file != null){
                        $file->saveAs(Yii::getPathOfAlias("webroot")."/documentsFiles/bitacoraDocuments/".$fileName);
                    }
					
					$curso=$_POST['CursoClase'];
					$hora=$_POST['HoraClase'];
					$asignatura=$_POST['AsignaturaClase'];
					$profesorguia=$_POST['ProfesorGuiaClase'];
					$numeroalumnos=$_POST['NumeroAlumnosClase'];
					$bitacorasesionid=$model->CodBitacora;
					
					for($i=0;$i<count($curso);$i++){
						
						if($curso[$i]!="" && $hora[$i]!="" && $asignatura[$i]!="" && $profesorguia[$i]!="" && $numeroalumnos[$i]!=""){
							$query="insert into clasebitacorasesion(CursoClase,HoraClase,AsignaturaClase,ProfesorGuiaClase,NumeroAlumnosClase,BitacoraSesion_CodBitacora) values('$curso[$i]','$hora[$i]','$asignatura[$i]','$profesorguia[$i]','$numeroalumnos[$i]','$bitacorasesionid')";
							Yii::app()->db->createCommand($query)->execute();
						}
					}
					$this->redirect(array('view','id'=>$model->CodBitacora));
				}
			}
			
			$this->render('create',array(
				'model'=>$model,
			));
			
		}else{
			Yii::app()->user->setFlash('message',"<div id='errorMessage' class='flash-error'><p><strong>¡Advertencia!</strong></p><ul><li>Solo se permite el ingreso de una bitácora por planificación.</li><li>Para visualizar la bitácora correspondiente a esta planificación haga click en <strong>'Ver Bitácora'</strong>.</li></ul></div>");
			$this->redirect(array('planificacionclaseadministrador/view','id'=>$id));
		}
		
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		
		
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		
        $imageAttrib = "DocumentoBitacora";
		$table = "bitacorasesion";
		$codTable = "CodBitacora";
		
		$oldImage = getImageModel($imageAttrib,$table,$codTable,$id);
        
        
        $claseBitacoraModel=new Clasebitacorasesion;
        
		$claseBitacoraModel=Clasebitacorasesion::model()->findAll('BitacoraSesion_CodBitacora=?',array($id));
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		
		if(isset($_POST['Bitacorasesion']))
		{
			$model->attributes=$_POST['Bitacorasesion'];
            
            $rnd = rand(1000,9999);
            $file=CUploadedFile::getInstance($model,'DocumentoBitacora');
            $fileName = "{$rnd}-{$file}";  // numero aleatorio  + nombre de archivo
            
            if($file != null){
                $model->DocumentoBitacora = $fileName;
            }
			
			//$file=$model->DocumentoBitacora=CUploadedFile::getInstance($model,'DocumentoBitacora');
			
			if($model->save()){
				if($file != null){
                    $file->saveAs(Yii::getPathOfAlias("webroot")."/documentsFiles/bitacoraDocuments/".$fileName);
				}else{
					saveImagePath($table,$imageAttrib,$oldImage,$codTable,$model->CodBitacora);
				}
				
				if(isset($_POST['CodClase'])){
					
					$id=$_POST['CodClase'];
					$curso=$_POST['CursoClase'];
					$hora=$_POST['HoraClase'];
					$asignatura=$_POST['AsignaturaClase'];
					$profesorguia=$_POST['ProfesorGuiaClase'];
					$numeroalumnos=$_POST['NumeroAlumnosClase'];
					$bitacorasesionid=$model->CodBitacora;
					
					$classData=getClasesData($bitacorasesionid);
					$start = true;
					$l=0;
					$founded=false;
					
					for($j=0;$j<count($classData['data']);$j++){
						
						$founded = containsClassArr($classData['data'][$j],$id);
						
						if($founded == false){
							$query="delete from clasebitacorasesion where CodClase ='".$classData['data'][$j]."'";
							$exist=Yii::app()->db->createCommand($query)->execute();
						}
					}
					
					for($i=0;$i<count($curso);$i++){
						if($curso[$i]!="" && $hora[$i]!="" && $asignatura[$i]!="" && $profesorguia[$i]!="" && $numeroalumnos[$i]!=""){
							
							if($id[$i] == ""){
								$query="insert into clasebitacorasesion(CursoClase,HoraClase,AsignaturaClase,ProfesorGuiaClase,NumeroAlumnosClase,BitacoraSesion_CodBitacora) values('$curso[$i]','$hora[$i]','$asignatura[$i]','$profesorguia[$i]','$numeroalumnos[$i]','$bitacorasesionid')";
							}else{
								$query="update clasebitacorasesion set CursoClase='".$curso[$i]."',HoraClase='".$hora[$i]."',AsignaturaClase='".$asignatura[$i]."',ProfesorGuiaClase='".$profesorguia[$i]."',NumeroAlumnosClase='".$numeroalumnos[$i]."',BitacoraSesion_CodBitacora='".$bitacorasesionid."' where CodClase='".$id[$i]."'";
							}
							Yii::app()->db->createCommand($query)->execute();
						}
					}	
				}else{
					Yii::app()->user->setFlash('success','<h1>Debe añadir al menos una clase!!!</h1><br>');
					$this->refresh();
				}
				$this->redirect(array('view','id'=>$model->CodBitacora));
			}
				
		}

		$this->render('update',array(
			'model'=>$model,
			'claseBitacoraModel'=>$claseBitacoraModel,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$logBookPlanning = findLogBookPlanning($id);
		$planningRut = findPlanningRut($logBookPlanning);
		
		$existClaseLogBook = containsClaseLogBook($id);
		
		if($existClaseLogBook != 0){
			deleteLogBookSesion($id);
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
		$dataProvider=new CActiveDataProvider('Bitacorasesionadmin');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

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
	 * @return Bitacorasesion the loaded model
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
	 * @param Bitacorasesion $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='bitacorasesion-form')
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
