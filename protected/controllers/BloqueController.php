<?php

class BloqueController extends Controller
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
			/*array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','batchUpdate'),
				//'users'=>array('*'),
				'users'=>Bloque::model()->getAdmins(),
			),*/
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('batchUpdate'),
				//'users'=>array('*'),
				'users'=>Bloque::model()->getAdmins(),
			),
			/*array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				//'users'=>array('@'),
				'users'=>Bloque::model()->getAdmins(),
			),*/
			/*array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				//'users'=>array('admin'),
				'users'=>Bloque::model()->getAdmins(),
			),*/
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
		$model=new Bloque;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Bloque']))
		{
			$model->attributes=$_POST['Bloque'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->CodBloque));
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

		if(isset($_POST['Bloque']))
		{
			$model->attributes=$_POST['Bloque'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->CodBloque));
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
		$dataProvider=new CActiveDataProvider('Bloque');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Bloque('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Bloque']))
			$model->attributes=$_GET['Bloque'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Bloque the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Bloque::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Bloque $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='bloque-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	public function getItemsToUpdate() {
        // Create an empty list of records
        $items = array();
 
        // Iterate over each item from the submitted form
        if (isset($_POST['Bloque']) && is_array($_POST['Bloque'])) {
            foreach ($_POST['Bloque'] as $item) {
                // If item id is available, read the record from database 
                if ( array_key_exists('CodBloque', $item) ){
                    $items[] = Bloque::model()->findByPk($item['CodBloque']);
                }
                // Otherwise create a new record
                else {
                    $items[] = new Bloque();
                }
            }
        }
        return $items;
    }
	
	public function actionBatchUpdate()
{
    // retrieve items to be updated in a batch mode
    // assuming each item is of model class 'Item'
    $items=$this->getItemsToUpdate();
	$wrongTime = false;	
		
    if(isset($_POST['Bloque']))
    {
        $valid=true;
        foreach($items as $i=>$item)
        {
			if(isset($_POST['Bloque'][$i]))
				$item->attributes=$_POST['Bloque'][$i];
			$valid=$item->validate() && $valid;
        }
		
		//$l=0;
		foreach($items as $item){
			$init=$item->HoraInicio;
			$end=$item->HoraFin;
			
			$initTime = substr($init,0);
			$endTime = substr($end,0);
			
			if($initTime == '0'){
				$initTime = substr($init,1);
			}
			
			if($endTime == '0'){
				$endTime = substr($end,1);
			}
			
			$initTimeInt = (int)$initTime;
			$endTimeInt = (int)$endTime;
			
			
			if($endTimeInt < $initTimeInt){
				$wrongTime = true;
			}
			//$l++;
		}
		
		if($wrongTime == false){
			if($valid){
				foreach ($items as $item) {
					$item->save();
				}
				Yii::app()->user->setFlash('message',"<div id='errorMessage' class='flash-success'><p><strong>¡Operación realizada!</strong></p><ul><li>Datos almacenados correctamente.</li></ul></div>");
					$this->refresh();
			}
		}else{
			Yii::app()->user->setFlash('message',"<div id='errorMessage' class='flash-error'><p><strong>¡Advertencia!</strong></p><ul><li>Los datos no se han ingresado correctamente, intente de nuevo.</li></ul></div>");
			$this->refresh();
		} 
    }
    // displays the view to collect tabular input
    $this->render('batchUpdate',array('items'=>$items));
}
	
}
