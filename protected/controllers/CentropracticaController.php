<?php
include_once('mainFunctions.php');

class CentropracticaController extends Controller
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
				'actions'=>array('index','view','selectProvincia','selectCiudad'),
				//'users'=>array('*'),
				'users'=>Centropractica::model()->getAdmins(),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				//'users'=>array('@'),
				'users'=>Centropractica::model()->getAdmins(),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				//'users'=>array('admin'),
				'users'=>Centropractica::model()->getAdmins(),
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
		$model=new Centropractica;
		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		$table = "centropractica";
		$codTable = "RBD";
		
        $enabledCentro = isCentroEnabled();
	
        if($enabledCentro == true){
            if(isset($_POST['Centropractica'])){
                
                $model->attributes=$_POST['Centropractica'];
                
                $rnd = rand(0,9999);
                $image=CUploadedFile::getInstance($model,'ImagenCentroPractica');
                $imageName = "{$rnd}-{$image}";
                
                if($image != null){
                    $model->ImagenCentroPractica = $imageName;
                }
                
                //se añade esta linea para agregar imagenes, se obtiene la ruta del campo rutaImagenAlojamiento
                $file=$model->AnexoProtocolo=CUploadedFile::getInstance($model,'AnexoProtocolo');
                $exist = contains($table,$codTable,$model->RBD);
                
                if($exist == 0){
                    
                    if($model->save()){
                
                        if($file != null){    
                            if($file->getExtensionName()=="pdf"){
                                
                                $model->AnexoProtocolo->saveAs(Yii::getPathOfAlias("webroot")."/PDFFiles/".$file->getName());
                            }else{
                                deleteData($table,$codTable,$model->RBD);
                                Yii::app()->user->setFlash('message',"<div id='errorMessage' class='flash-error'><p><strong>¡Advertencia!</strong></p><ul><li>No es posible subir el archivo.</li><li>Solo se permiten archivos en formato .pdf.</li></ul></div>");
                                $this->refresh();
                            }
                        }
                        
                        if($image != null){
                            if($image->getExtensionName()=="jpg" or $image->getExtensionName()=="jpeg" or $image->getExtensionName()=="png"){
                                $image->saveAs(Yii::getPathOfAlias("webroot")."/images/ImagenCentroPracticas/".$imageName);
                            }else{
                                deleteData($table,$codTable,$model->RBD);
                                Yii::app()->user->setFlash('message',"<div id='errorMessage' class='flash-error'><p><strong>¡Advertencia!</strong></p><ul><li>No es posible subir el archivo de imagen.</li><li>Solo se permiten archivos en formato .jpg, .jpeg o .png.</li></ul></div>");
                                $this->refresh();
                            }
                        }    
                        $this->redirect(array('view','id'=>$model->RBD));
                    }
                }else{
                    Yii::app()->user->setFlash('message',"<div id='errorMessage' class='flash-error'><p><strong>¡No es posible ingresar los datos!</strong></p><ul><li>El centro de práctica con RBD: ".$model->RBD." ya está registrado.</li></ul></div>");
                    $this->refresh();
                }
            }
            $this->render('create',array(
                'model'=>$model,
            ));
        }else{
            Yii::app()->user->setFlash('message',"<div id='errorMessage' class='flash-error'><p><strong>¡Advertencia!</strong></p><ul><li>No se pueden añadir centros de práctica en este momento.</li><li>Por favor verifique que se ha agregado información de <strong>Dependencias</strong>, y <strong>Nivel Educacional</strong>.</li></ul></div>");
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

		$fileAttribCentro = "AnexoProtocolo";
		$tableCentro = "centropractica";
		$codTableCentro = "RBD";
		
		$oldFileCentro = getFileModel($fileAttribCentro,$tableCentro,$codTableCentro,$id);
		
		$imageAttribCentro = "ImagenCentroPractica";
		$tableCentro = "centropractica";
		$codTableCentro = "RBD";
		
		$oldImageCentro = getFileModel($imageAttribCentro,$tableCentro,$codTableCentro,$id);
		
		if(isset($_POST['Centropractica']))
		{
			$model->attributes=$_POST['Centropractica'];
            
            
            $rnd = rand(0,9999);
                $image=CUploadedFile::getInstance($model,'ImagenCentroPractica');
                $imageName = "{$rnd}-{$image}";
                
                if($image != null){
                    $model->ImagenCentroPractica = $imageName;
                }
			
			//se añade esta linea para agregar imagenes, se obtiene la ruta del campo rutaImagenAlojamiento
			$file=$model->AnexoProtocolo=CUploadedFile::getInstance($model,'AnexoProtocolo');
			
			if($model->save()){
				if($file != null){
					if($file->getExtensionName()=="pdf"){
						//se guarda la ruta de la imagen
						$model->AnexoProtocolo->saveAs(Yii::getPathOfAlias("webroot")."/PDFFiles/".$file->getName());
					}else{
						Yii::app()->user->setFlash('mensaje','Solo archivos pdf por favor');
						$this->refresh();
					}
				}else{
					saveFilePath($tableCentro,$fileAttribCentro,$oldFileCentro,$codTableCentro,$id);
				}
				
				if($image != null){
					if($image->getExtensionName()=="jpg" or $image->getExtensionName()=="jpeg" or $image->getExtensionName()=="png"){
						//se guarda la ruta de la imagen
						$image->saveAs(Yii::getPathOfAlias("webroot")."/images/ImagenCentroPracticas/".$imageName);
					}else{
						Yii::app()->user->setFlash('mensaje','Solo archivos jpg por favor');
						$this->refresh();
					}	
				}else{
					saveFilePath($tableCentro,$imageAttribCentro,$oldImageCentro,$codTableCentro,$id);
				}
				
				$this->redirect(array('view','id'=>$model->RBD));
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
		$dataProvider=new CActiveDataProvider('Centropractica');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Centropractica('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Centropractica']))
			$model->attributes=$_GET['Centropractica'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Centropractica the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Centropractica::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Centropractica $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='centropractica-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	public function actionSelectProvincia()
	{
		$id_uno = $_POST['Centropractica']['Region_codRegion'];
		$lista = Provincia::model()->findAll('Region_codRegion = :id_uno',array(':id_uno'=>$id_uno));
		$lista = CHtml::listData($lista,'codProvincia','NombreProvincia');
		
		echo CHtml::tag('option',array('value'=>''),'Seleccione',true);
		
		foreach($lista as $valor => $descripcion){
			echo CHtml::tag('option',array('value'=>$valor),CHtml::encode($descripcion),true);
		}
	}
	
	//metodo que se utiliza para dropdown anidados, permite autocompletar el campo siguiente respecto a lo seleccionado
	public function actionSelectCiudad()
	{
		$id_dos = $_POST['Centropractica']['Provincia_codProvincia'];
		$lista = Ciudad::model()->findAll('Provincia_codProvincia = :id_dos',array(':id_dos'=>$id_dos));
		$lista = CHtml::listData($lista,'codCiudad','NombreCiudad');
		
		echo CHtml::tag('option',array('value'=>''),'Seleccione',true);
		
		foreach($lista as $valor => $descripcion){
			echo CHtml::tag('option',array('value'=>$valor),CHtml::encode($descripcion),true);
		}
	}
}
