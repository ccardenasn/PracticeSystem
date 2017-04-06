<?php
include_once('bitacoraFunctions.php');

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
		$model=new Bitacorasesion;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		
		if(isset($_POST['Bitacorasesion']))
		{
			$model->attributes=$_POST['Bitacorasesion'];
			
			$file=$model->DocumentoBitacora=CUploadedFile::getInstance($model,'DocumentoBitacora');
			
			if($model->save()){
				if($file != null){
					if($file->getExtensionName()=="doc" or $file->getExtensionName()=="docx"){
						//se guarda la ruta de la imagen
						$model->DocumentoBitacora->saveAs(Yii::getPathOfAlias("webroot")."/WordFiles/".$file->getName());
					}else{
						Yii::app()->user->setFlash('mensaje','Solo documentos en formato .doc o .docx');
						$this->refresh();
					}
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
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		$claseBitacoraModel=new Clasebitacorasesion;

		$claseBitacoraModel=Clasebitacorasesion::model()->findAll('BitacoraSesion_CodBitacora=?',array($id));
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		
		if(isset($_POST['Bitacorasesion']))
		{
			$model->attributes=$_POST['Bitacorasesion'];
			
			$file=$model->DocumentoBitacora=CUploadedFile::getInstance($model,'DocumentoBitacora');
			
			if($model->save()){
				if($file != null){
					if($file->getExtensionName()=="doc" or $file->getExtensionName()=="docx"){
						//se guarda la ruta de la imagen
						$model->DocumentoBitacora->saveAs(Yii::getPathOfAlias("webroot")."/WordFiles/".$file->getName());
					}else{
						Yii::app()->user->setFlash('mensaje','Solo documentos en formato .doc o .docx');
						$this->refresh();
					}
				}
				
				
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
		$dataProvider=new CActiveDataProvider('Bitacorasesion');
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
}
