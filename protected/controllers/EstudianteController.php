<?php
include_once('bitacoraFunctions.php');
include_once('mainFunctions.php');
include_once('FunSendMail.php');

class EstudianteController extends Controller
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
				'actions'=>array('index','view','selectProfesor','pdf','exportpdf'),
				//'users'=>array('*'),
				'users'=>Estudiante::model()->getAdmins(),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','readExcel'),
				//'users'=>array('@'),
				'users'=>Estudiante::model()->getAdmins(),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				//'users'=>array('@'),
				'users'=>Estudiante::model()->getAdmins(),
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
        $model=new Estudiante; 
        $this->performAjaxValidation($model);
        $table = "estudiante";
		$codTable = "RutEstudiante";
        $enabledEstudiante = isEnabled();
        
        if($enabledEstudiante == true){
            
            if(isset($_POST['Estudiante'])){
                
                $model->attributes=$_POST['Estudiante'];
                
                $rnd = rand(0,9999);
                $file=CUploadedFile::getInstance($model,'ImagenEstudiante');
                $fileName = "{$rnd}-{$file}";  // numero aleatorio  + nombre de archivo
                
                if($file != null){
                    $model->ImagenEstudiante = $fileName;
                }
                
                if($model->save()){
                    if($file != null){
                        if($file->getExtensionName()=="jpg" or $file->getExtensionName()=="jpeg" or $file->getExtensionName()=="png"){
                            $file->saveAs(Yii::getPathOfAlias("webroot")."/images/ImagenEstudiantes/".$fileName);
                        }else{
                            deleteData($table,$codTable,$model->RutEstudiante);
                            Yii::app()->user->setFlash('message',"<div id='errorMessage' class='flash-error'><p><strong>¡Advertencia!</strong></p><ul><li>No es posible subir el archivo de imagen.</li><li>Solo se permiten archivos en formato .jpg, .jpeg o .png.</li></ul></div>");
                            $this->refresh();
                        }
                    }
                    sendPassword($model->MailEstudiante,"Nuevo Usuario",$model->RutEstudiante,$model->NombreEstudiante,$model->ClaveEstudiante);
                    $this->redirect(array('view','id'=>$model->RutEstudiante));
                }
            }
            $this->render('create',array(
                'model'=>$model,
            ));
        
        }else{
            Yii::app()->user->setFlash('message',"<div id='errorMessage' class='flash-error'><p><strong>¡Advertencia!</strong></p><ul><li>No se pueden añadir estudiantes en este momento.</li><li>Por favor verifique que se ha agregado información de <strong>Menciones</strong>, <strong>Prácticas</strong>, <strong>Centros de Práctica</strong> y <strong>Profesores Guías CP</strong>.</li></ul></div>");
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
		
		$imageAttrib = "ImagenEstudiante";
		$table = "estudiante";
		$codTable = "RutEstudiante";
		
		$oldImage = getImageModel($imageAttrib,$table,$codTable,$id);
		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['Estudiante']))
		{
			$model->attributes=$_POST['Estudiante'];
            
            $rnd = rand(0,9999);
            $file=CUploadedFile::getInstance($model,'ImagenEstudiante');
            $fileName = "{$rnd}-{$file}";  // numero aleatorio  + nombre de archivo
            
            if($file != null){
                $model->ImagenEstudiante = $fileName;
            }
			
			if($model->save()){
				if($file != null){
					if($file->getExtensionName()=="jpg" or $file->getExtensionName()=="jpeg" or $file->getExtensionName()=="png"){
						//se guarda la ruta de la imagen
						$file->saveAs(Yii::getPathOfAlias("webroot")."/images/ImagenEstudiantes/".$fileName);
					}else{
						Yii::app()->user->setFlash('message',"<div id='errorMessage' class='flash-error'><p><strong>¡Advertencia!</strong></p><ul><li>No es posible subir el archivo de imagen.</li><li>Solo se permiten archivos en formato .jpg, .jpeg o .png.</li></ul></div>");
						$this->refresh();
					}
				}else{
					saveImagePath($table,$imageAttrib,$oldImage,$codTable,$id);
				}
				$this->redirect(array('view','id'=>$model->RutEstudiante));
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
		$existPlanning = containsPlanning($id);
		
		if($existPlanning != 0){
			$planningStudents = getPlanningStudents($id);
			
			for($i=0;$i<count($planningStudents);$i++){
				$remainPlanning = $planningStudents[$i]['CodPlanificacion'];
				$existLogBook = containsLogBook($remainPlanning);
				
				if($existLogBook != 0){
					$idLogBook = getIdLogBook($remainPlanning);
					$existClaseLogBook = containsClaseLogBook($idLogBook);
					
					if($existClaseLogBook != 0){
						deleteLogBookSesion($idLogBook);
					}
					deleteLogBook($remainPlanning);
				}
			}
			deletePlanning($id);
		}
		
		
		$existTimeTable = containsTimeTable($id);
		
		if($existTimeTable != 0){
			deleteTimeTable($id);
			deleteTimeTableAdmin($id);
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
		$dataProvider=new CActiveDataProvider('Estudiante');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Estudiante('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Estudiante']))
			$model->attributes=$_GET['Estudiante'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Estudiante the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Estudiante::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Estudiante $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='estudiante-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	public function actionReadExcel()
	{
        $model=new Estudiante('search');
		$studentsList = "";
		
		if(isset($_POST['Estudiante']))
		{
			$model->attributes=$_POST['Estudiante'];
            $archivo = $model->ImagenEstudiante=CUploadedFile::getInstance($model,'ImagenEstudiante');
			
			if($archivo != null){
				if($archivo->getExtensionName()=="xls" or $archivo->getExtensionName()=="xlsx"){
					$tipo = $archivo->getExtensionName();
					$destino = Yii::getPathOfAlias("webroot")."/ExcelLoaded/".$archivo->getName();
					$model->ImagenEstudiante->saveAs($destino);
					
					if (file_exists($destino)){
						/** Clases necesarias */
						Yii::import('application.extensions.Classes.PHPExcel');
						Yii::import('application.extensions.Classes.PHPExcel.Reader.Excel2007');
						spl_autoload_unregister(array('YiiBase', 'autoload'));
						$phpExcelPath = Yii::getPathOfAlias('application.extensions.Classes'); 
						include($phpExcelPath.DIRECTORY_SEPARATOR.'PHPExcel.php');
						spl_autoload_register(array('YiiBase','autoload'));
						
						// Cargando la hoja de cálculo
						$objReader = new PHPExcel_Reader_Excel2007();
                        date_default_timezone_set('America/Santiago');
						$objPHPExcel = $objReader->load($destino);
						$objFecha = new PHPExcel_Shared_Date();
						
						// Asignar hoja de excel activa
						$objPHPExcel->setActiveSheetIndex(0);
						
						//celda inicial en la cual empezara a realizar el barrido de la grilla de excel
						$i=2;
						$run=true;
                        
                        $validExcel = checkExcelHeaderFormat($objPHPExcel); 
                        
                        if($validExcel == true){
                            while($run==true){
							if($objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue()==NULL){
								$run=false;
							}else{
								$rut = trim($objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue());
								$nombre = trim($objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue());
								$clave = trim($objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue());
								$fecha = trim($objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue());
								$mencion = trim($objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue());
								$mail = trim($objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue());
								$telefono = trim($objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue());
								$celular = trim($objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue());
								$profesor = trim($objPHPExcel->getActiveSheet()->getCell('I'.$i)->getCalculatedValue());
								$practica = trim($objPHPExcel->getActiveSheet()->getCell('J'.$i)->getCalculatedValue());
								$centro = trim($objPHPExcel->getActiveSheet()->getCell('K'.$i)->getCalculatedValue());
								$imagen = trim($objPHPExcel->getActiveSheet()->getCell('L'.$i)->getCalculatedValue());
								$situacion = trim($objPHPExcel->getActiveSheet()->getCell('M'.$i)->getCalculatedValue());
								$observacion = trim($objPHPExcel->getActiveSheet()->getCell('N'.$i)->getCalculatedValue());
								
								$existStudent = containsStudentExcel($rut);
								
								if($existStudent == 0){
                                    
                                    $existData = checkData($mencion,$profesor,$practica,$centro);
                                    
                                    
                                    if($existData == true){
                                        $query = "INSERT INTO estudiante(RutEstudiante,NombreEstudiante,ClaveEstudiante,FechaIncorporacion,Mencion_NombreMencion,MailEstudiante,TelefonoEstudiante,CelularEstudiante,ProfesorGuiaCP_RutProfGuiaCP,ConfiguracionPractica_NombrePractica,CentroPractica_RBD,ImagenEstudiante,SituacionFinalEstudiante,ObservacionEstudiante) VALUES('".$rut."','".$nombre."','".$clave."','".$fecha."','".$mencion."','".$mail."','".$telefono."','".$celular."','".$profesor."','".$practica."','".$centro."','".$imagen."','".$situacion."','".$observacion."');";
                                        
                                        Yii::app()->db->createCommand($query)->execute();
                                    }else{
                                        Yii::app()->user->setFlash('message',"<div id='errorMessage' class='flash-error'><p><strong>¡Advertencia!</strong></p><ul><li>No es posible agregar al estudiante de nombre: ".$nombre.", rut: ".$rut.".</li><li>Por favor verifique si los datos del estudiante correspondientes a Mención, Profesor Guía CP, Práctica y Centro de Práctica han sido ingresados previamente al sistema.</li></ul></div>");
                                        $this->refresh();
                                    }
                                }else{
                                    $studentsList = $studentsList."<br><li>".$nombre.", ".$rut."</li>";
                                }
                            }
                            $i++;
                        }
                        }else{
                            Yii::app()->user->setFlash('message',"<div id='errorMessage' class='flash-error'><p><strong>¡Advertencia!</strong></p><ul><li>Formato de tabla incorrecto.</li></ul></div>");
                                        $this->refresh();
                        }
                        
						
						
                    }
                    unlink($destino);
                    
                    if($studentsList == ""){
                        Yii::app()->user->setFlash('message',"<div id='errorMessage' class='flash-success'><p><strong>¡Operación realizada!</strong></p><ul><li>Datos almacenados correctamente.</li></ul></div>");
                        $this->refresh();
                    }else{
                        Yii::app()->user->setFlash('message',"<div id='errorMessage' class='flash-success'><p><strong>¡Operación realizada!</strong></p><ul><li>Datos almacenados correctamente.</li><li>Los siguientes alumnos ya se encuentran registrados, por lo tanto se han omitido durante el ingreso:<ul>".$studentsList."</ul></li></ul></div>");
                        $this->refresh();
                    }
				}else{
					Yii::app()->user->setFlash('message',"<div id='errorMessage' class='flash-error'><p><strong>¡Advertencia!</strong></p><ul><li>Solo se permiten archivos con extension .xls o .xlsx.</li></ul></div>");
					$this->refresh();
                }
            }else{
                Yii::app()->user->setFlash('message',"<div id='errorMessage' class='flash-error'><p><strong>¡Advertencia!</strong></p><ul><li>Por favor seleccione un archivo primero.</li></ul></div>");
				$this->refresh();
			}
		}
        
        $model->unsetAttributes();
        
        if(isset($_GET['Estudiante']))
            $model->attributes=$_GET['Estudiante'];
		
		$this->render('readExcel',array(
			'model'=>$model,
		));
        
	}
	
	public function actionSelectProfesor()
	{
		$id_uno = $_POST['Estudiante']['CentroPractica_RBD'];
		$lista = Profesorguiacp::model()->findAll('CentroPractica_RBD = :id_uno',array(':id_uno'=>$id_uno));
		$lista = CHtml::listData($lista,'RutProfGuiaCP','NombreProfGuiaCP');
		
		echo CHtml::tag('option',array('value'=>''),'Seleccione',true);
		
		foreach($lista as $valor => $descripcion){
			echo CHtml::tag('option',array('value'=>$valor),CHtml::encode($descripcion),true);
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
