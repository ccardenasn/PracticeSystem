<?php

class ListaestudianteController extends Controller
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
				'actions'=>array('create'),
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
	

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	/*public function actionCreate()
	{
		$model=new Listaestudiante;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Listaestudiante']))
		{
			$model->attributes=$_POST['Listaestudiante'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->RutEstudiante));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}*/
    
    public function actionCreate()
	{
        $model=new Listaestudiante;
        // Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Listaestudiante']))
		{
			$model->attributes=$_POST['Listaestudiante'];
            
            $archivo = $model->ImagenEstudiante=CUploadedFile::getInstance($model,'ImagenEstudiante');;
            $tipo = $archivo->getExtensionName();
            $destino = Yii::getPathOfAlias("webroot")."/ExcelLoaded/".$archivo->getName();
    
            $model->ImagenEstudiante->saveAs($destino);
            
            if (file_exists($destino))
            {
                /** Clases necesarias */
                Yii::import('application.extensions.classes.PHPExcel');
                Yii::import('application.extensions.classes.PHPExcel.Reader.Excel2007');
                spl_autoload_unregister(array('YiiBase', 'autoload')); 
                $phpExcelPath = Yii::getPathOfAlias('application.extensions.classes'); 
                include($phpExcelPath.DIRECTORY_SEPARATOR.'PHPExcel.php');
                spl_autoload_register(array('YiiBase','autoload'));
                
                // Cargando la hoja de cálculo
                $objReader = new PHPExcel_Reader_Excel2007();
                $objPHPExcel = $objReader->load($destino);
                $objFecha = new PHPExcel_Shared_Date();
                
                // Asignar hoja de excel activa
                $objPHPExcel->setActiveSheetIndex(0);
                
                //celda inicial en la cual empezara a realizar el barrido de la grilla de excel
                $i=1;
                $run=true;
                $contador=0;
                
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
                        
                        $query = "INSERT INTO estudiante(RutEstudiante,NombreEstudiante,ClaveEstudiante,FechaIncorporacion,Mencion_NombreMencion,MailEstudiante,TelefonoEstudiante,CelularEstudiante,ProfesorGuiaCP_RutProfGuiaCP,ConfiguracionPractica_NombrePractica,CentroPractica_RBD,ImagenEstudiante) VALUES('".$rut."','".$nombre."','".$clave."','".$fecha."','".$mencion."','".$mail."','".$telefono."','".$celular."','".$profesor."','".$practica."','".$centro."','".$imagen."');";
                        
                        Yii::app()->db->createCommand($query)->execute();
                    }
                    
                    $i++;
                    $contador=$contador+1;
                }
            }else{
                echo "Necesitas primero importar el archivo";
            }
            //una vez terminado el proceso borramos el archivo que esta en el servidor el bak_
            unlink($destino);
            
            Yii::app()->user->setFlash('success',"Datos Almacenados Correctamente!!!");	
			$this->redirect(array('create'));
		}
		
		
        
		$this->render('create',array(
			'model'=>$model,
			
		));
        
	}
	
	public function actionView($id)
	{
		$this->render('/estudiante/view',array(
			'model'=>$this->loadModel($id),
		));
	}
	
	public function actionAdmin()
	{
		$model=new Estudiante('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Estudiante']))
			$model->attributes=$_GET['Estudiante'];

		$this->render('create',array(
			'model'=>$model,
		));
	}
	
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}
	

	public function loadModel($id)
	{
		$model=Estudiante::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Listaestudiante $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='listaestudiante-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
