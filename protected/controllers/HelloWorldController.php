<?php

class HelloWorldController extends CController
{
	
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','updateajax'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	
    public function actionIndex()
    {
        $data = array();
        $data["myValue"] = "Content loaded";
		
 
        $this->render('index', $data);
    }
 
    public function actionUpdateAjax()
    {
        $data = array();
		 $cont2 = Yii::app()->request->getParam('vehId');
        $data["myValue"] = $cont2;
 
        $this->renderPartial('_ajaxContent', $data, false, true);
    }
}