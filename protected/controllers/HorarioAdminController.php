<?php
include_once('horarioFunctions.php');
include_once('mainFunctions.php');

class HorarioadminController extends Controller
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
				'actions'=>array('index','view','createHorario','saveTimetable'),
				//'users'=>array('*'),
				'users'=>Horarioadmin::model()->getAdmins(),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				//'users'=>array('@'),
				'users'=>Horarioadmin::model()->getAdmins(),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				//'users'=>array('@'),
				'users'=>Horarioadmin::model()->getAdmins(),
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
		$this->render('viewHorario',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Horarioadmin;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Horarioadmin']))
		{
			$model->attributes=$_POST['Horarioadmin'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->CodHorario));
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

		if(isset($_POST['Horarioadmin']))
		{
			$model->attributes=$_POST['Horarioadmin'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->CodHorario));
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
		$existSubject = containsTimetableSubject($id);
		
		if($existSubject != 0){
			deleteTimetableSubjects($id);
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
		$dataProvider=new CActiveDataProvider('Horarioadmin');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
	
	public function actionSuccessTimeTable()
	{
		Yii::app()->user->setFlash('message',"<div id='errorMessage' class='flash-success'><p><strong>¡Operación realizada!</strong></p><ul><li>Para editar un horario debe hacer clic en <strong>'Administración de Horarios'</strong>.</li></ul></div>");
		$this->render('index');
	}
	
	public function actionSuccessUpdateTimeTable()
	{
		$this->render('successUpdateTimeTable');
	}
	
	public function actionCreateHorario($id)
	{	
		$table = "horarioadmin";
		$codTable = "Estudiante_RutEstudiante";
		
		$exist = contains($table,$codTable,$id);
		
		if($exist == 0){
			$this->render('createHorario');
		}else{
			Yii::app()->user->setFlash('message',"<div id='errorMessage' class='flash-error'><p><strong>¡Advertencia!</strong></p><ul><li>El horario ha sido creado previamente.</li><li>Para modificar el horario haga click en la opción <strong>'Editar Horario'</strong> de la sección <strong>'Administración de Horarios'</strong>.</li><li>Haga click <strong>".CHtml::link('aquí',array('horarioadmin/index'))."</strong> para acceder a la sección de horarios</li></ul></div>");
			$this->redirect(array('estudiante/view','id'=>$id));
		}
		
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Horarioadmin('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Horarioadmin']))
			$model->attributes=$_GET['Horarioadmin'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Horarioadmin the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Horarioadmin::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Horarioadmin $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='horarioadmin-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
    
    public function actionSaveTimetable()
	{
        $horario = $_REQUEST['horario'];
        $accion = $_REQUEST['action'];
        $rutData = $_REQUEST['rut'];
        
        $queryExistStudent = "select count(*) from horarioadmin where Estudiante_RutEstudiante = '".$rutData."';";
        $execQueryStCount = Yii::app()->db->createCommand($queryExistStudent)->queryScalar();
        $existStResult = $execQueryStCount;
        
        if($existStResult == 0){
            $querySt = "insert into horarioadmin(Estudiante_RutEstudiante) values('".$rutData."');";
            Yii::app()->db->createCommand($querySt)->execute();
        }
        
        $horarioAdminData=Horarioadmin::model()->find('Estudiante_RutEstudiante=?',array($rutData));
        $existGtResult = $horarioAdminData->CodHorario;
        
        for($i=0;$i<count($horario);$i++){
            $rut = $horario[$i][0];
            $asignatura = $horario[$i][1];
            $dia = $horario[$i][3];
            $bloque = $horario[$i][4];
            
            if($bloque != "Asignar"){
                $initTimeData=Bloque::model()->find('NombreBloque=?',array($bloque));
                $initTime = $initTimeData->HoraInicio;
                $horaInicio = $initTime;
            
                $endTimeData=Bloque::model()->find('NombreBloque=?',array($bloque));
                $endTime = $endTimeData->HoraFin;
                $horaFin = $endTime;
            }
            
            if($asignatura != "Asignar"){
                
                if($accion == "Create"){
                    
                    if($asignatura != "Asignar"){
                        $query = "insert into horario(Estudiante_RutEstudiante,Asignatura_NombreAsignatura,HoraInicio,HoraFin,Dia,Bloque,HorarioAdmin_CodHorario) values('".$rut."','".$asignatura."','".$horaInicio."','".$horaFin."','".$dia."','".$bloque."','".$existGtResult."');";
                        Yii::app()->db->createCommand($query)->execute();
                    }
                }else{
                    $queryCount = "select count(*) from horario where Estudiante_RutEstudiante = '".$rut."' and Dia = '".$dia."' and Bloque = '".$bloque."';";
                    $execQueryCount = Yii::app()->db->createCommand($queryCount)->queryScalar();
                    $existResult = $execQueryCount;
                    
                    if($existResult == 1){
                        if($asignatura != "Asignar"){
                            $queryUpdate = "update horario set Asignatura_NombreAsignatura='".$asignatura."' where Estudiante_RutEstudiante = '".$rut."' and Dia = '".$dia."' and Bloque = '".$bloque."';";
                            Yii::app()->db->createCommand($queryUpdate)->execute();
                        }else{
                            $queryDelete = "delete from horario where Estudiante_RutEstudiante = '".$rut."' and Dia = '".$dia."' and Bloque = '".$bloque."';";
                            Yii::app()->db->createCommand($queryDelete)->execute();
                        }
                    }else{
                        $queryCreate = "insert into horario(Estudiante_RutEstudiante,Asignatura_NombreAsignatura,HoraInicio,HoraFin,Dia,Bloque,HorarioAdmin_CodHorario) values('".$rut."','".$asignatura."','".$horaInicio."','".$horaFin."','".$dia."','".$bloque."','".$existGtResult."');";
                        Yii::app()->db->createCommand($queryCreate)->execute();
                    }
                }
            }
        }
    }
}
